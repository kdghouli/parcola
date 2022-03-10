@extends('page.layer')
@section('title', 'Show')
@section('content')


    @if(session()->has('etat'))
        <div class="alert alert-success" role="alert">
            {{session()->get('etat')}}
        </div>

    @endif





    <div class="card border-dark mb-2">
        <div class="card-header"><h1>{{$vhl->matricule}}</h1></div>
        <div class="card-body text-success">


            <h5 class="card-text">Marque : <strong>{{$vhl->marque}}</strong></h5>
            <h5 class="card-text">Type  :  <strong>{{$vhl->type}}</strong></h5>
            <h5 class="card-text">Chassis  :  <strong>{{$vhl->chassis}}</strong></h5>
            <h5 class="card-text">Intitule  :  <strong>{{$vhl->intitule->nom}}</strong></h5>
            <h5 class="card-text"> Categorie :  <strong>{{$vhl->categorie->nom}}</strong></h5>
            <h5 class="card-text">Affectation :  <strong>{{$vhl->agence->nom}}</strong></h5>

            <p class="card-title float-md-right">{{$vhl->updated_at->diffForHumans()}}</p>



        </div>
    </div>
    <a class="btn btn-outline-info my-md-1" href="http://localhost:8000/creatComment/{{$vhl->id}}">Commentaire</a>
    <a class="btn btn-outline-danger my-md-1" href="http://localhost:8000/creatStatus/{{$vhl->id}}">Status</a>

    @if(count($vhl->commentaires)>=1)

            @foreach($vhl->commentaires as $comm)

              <br>
             <div class="card p-2">
                 <div class="d-flex justify-content-between align-items-center">
                     <div class="user d-flex flex-row align-items-center"> <span><small class="font-weight-bold text-primary">MMR :</small> <small class="font-weight-bold"><h5>{{$comm->commentaire}}</h5></small></span> </div> <small>{{$comm->updated_at->diffForHumans()}}</small>
                 </div>
                 <div class="action d-flex justify-content-between mt-2 align-items-center">
                     <div class="px-5 text-left"> <small>Cache</small> <span class="dots"></span> <small>Relance</small> <span class="dots"></span> <small>Urgent</small> </div>
                     <div class="icons align-items-center"> <i class="fa fa-star text-warning"></i> <i class="fa fa-check-circle-o check-icon"></i> </div>
                 </div>
             </div>

            @endforeach


    @endif
    <br>


    @endsection
