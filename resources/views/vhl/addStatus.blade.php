@extends('page.layer')

@section('content')


    <h3>Ce commentaire a propos de Matricule : {{$vhl->matricule}} </h3>

    {{--{{dd($vhl)}}--}}









    <form method="POST" action="{{route('vhlStatusSave')}}" >
        @csrf
        <div class="form-group my-2">

            <label for="exampleFormControlTextarea1"><h2>Status:</h2></label>
@foreach($stat as $stata)
            <div class="form-check my-2">
                <input class="form-check-input" type="checkbox" value="{{$stata ->id}}" name="statu_id[]" id="{{$stata->etat}}">
                <label class="form-check-label" for="{{$stata ->etat}}">
                    {{$stata ->etat}}
                </label>
            </div>

@endforeach



            <input type="hidden" name="vhl_id" value="{{$vhl->id}}" >

            <button type="submit" class="btn btn-info btn-block">Ok</button>

        </div>
    </form>


@endsection
