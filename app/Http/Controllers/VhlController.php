<?php

namespace App\Http\Controllers;

use App\Agence;
use App\Categorie;
use App\Commentaire;
use App\Intitule;
use App\Statu;
use App\Vhl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Helper\Table;


class VhlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vhls=Vhl::with('Agence')->latest()->get();
//        $vhl=Vhl::cursor();
        return view('vhl.indexVhl',['vhls'=> $vhls]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $agences=Agence::all()->unique('nom');
        $categories=Categorie::all()->unique('nom');
        $intitules=Intitule::all()->unique('nom');


        return view('vhl.formVhl',['agences'=>$agences,'categories'=>$categories,'intitules'=>$intitules]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
   $this->validate($request,[

           'matricule' => 'required|min:4',
           'categorie' => 'required',
       ]);
//      dd($request);
        $vhl =new Vhl();
        $vhl ->matricule=$request->input('matricule');
        $vhl ->marque=$request->input('marque');
        $vhl ->type=$request->input('type');
        $vhl ->date_mc=$request->input('date_mc');
        $vhl ->chassis=$request->input('chassis');
        $vhl ->equipement=$request->input('equipement');
        $vhl ->puissance=(integer)$request->puissance;
        $vhl ->agence_id=$request->input('agence');
        $vhl ->intitule_id=$request->input('intitule');
        $vhl ->categorie_id=$request->input('categorie');






        $vhl ->save();
        $request->session()->flash('etat',"la véhicule {$vhl['matricule']} est bien ajouter à cette table ");
        return redirect()->route('vhl.index');
        //return dd($vhl);








    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vhl  $vhl
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$vhls=Vhl::with('comment')->get();
        return view('vhl.showVhl',['vhl'=> Vhl::find($id)]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vhl  $vhl
     * @return \Illuminate\Http\Response
     */
    public function edit(Vhl $vhl)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vhl  $vhl
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vhl $vhl)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vhl  $vhl
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vhl $vhl)
    {
        //
    }
    public function cumul(){
        $vhlcumul=Vhl::withCount(['agence','categorie','intitule'])->get();
        $agenci=Agence::all()->unique('nom');
        $agg=Agence::withCount('vhls')->get();

//        $vhl=Vhl::cursor();
        return view('vhl.cumul',['vhlcumul'=> $vhlcumul,'agenci'=>$agenci,'agg'=>$agg]);

    }




    public function test (){

        //$counter=Vhl::select(DB::raw('count(*) as counter ,agence_id'))->groupBy('agence_id')->get();

        $counter=Agence::withCount(['vhls'])->get();

        $vhls=Vhl::with(['agence','categorie','intitule','status'])->get();

        return view('vhl.test',['count'=>$counter,'vhls'=>$vhls]);


    }

    public function linkComment($id){

        $vhl=Vhl::findOrFail($id);
        return view('commentaire.addComment',['vhl'=>$vhl]);

    }


    public function storeComment(Request $request,Commentaire $comment,Vhl $vhl)
    {
        $this->validate($request,[

            'commentaire' => 'required|min:4',

        ]);
//      dd($request);

        $comment ->commentaire=$request->input('commentaire');
        $comment ->date_commentaire=now();
        $comment ->vhl_id=$request->input('vhl_id');


        $comment ->save();
        $request->session()->flash('etat',"Nouveau commentaire !!");
        return redirect()->route('vhl.show',['vhl'=>$comment->vhl_id]);
        //return dd($vhl);


    }
    public function linkStatus($id){

        $vhl=Vhl::findOrFail($id);
        $stat=Statu::all();
        return view('vhl.addStatus',['vhl'=>$vhl,'stat'=>$stat]);

    }


    public function storeStatus(Request $request,Vhl $vhl)
    {
        $this->validate($request,[


        ]);


        //$data['stat']=(array)$request->input([stats])
        $stat['statu_id']=implode(',',$request->input('statu_id'));
        //$stat=$request->input('statu_id');
        $vhl=Vhl::find($request->input('vhl_id'));
        //dd($stat);
        $vhl->status()->sync([$stat]);
        //$stat ->save();
        $request->session()->flash('etat',"Nouveau status !!");
        return redirect()->route('vhl.show',['vhl'=>$vhl->id]);
        //return dd($vhl);


    }
    public function vue(Vhl $vhl)
    {


        $vhls=Vhl::with('Agence')->latest()->get();
        //        $vhl=Vhl::cursor();
                return response()->json($vhls);


    }
    public function storeAgence(Request $request){

        $agence = Agence::create($request->all());

        return response()->json($agence);



    }










}
