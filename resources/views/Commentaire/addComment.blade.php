@extends('page.layer')

@section('content')
    <h3>Ce commentaire a propos de Matricule : {{ $vhl->matricule }} </h3>

    {{-- {{dd($vhl)}} --}}









    <form method="POST" action="{{ route('vhlCommentSave') }}">
        @csrf
        <div class="form-group my-2">

            <label for="exampleFormControlTextarea1">Commentaire:</label>
            <textarea class="form-control mb-2" id="exampleFormControlTextarea1" name="commentaire" rows="3">

            </textarea>

            <input type="hidden" name="vhl_id" value="{{ $vhl->id }}">

            <button type="submit" class="btn btn-info btn-block  ">Ok</button>

        </div>
    </form>
@endsection
