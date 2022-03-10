@extends('.page.layer')

@section('content')
    @if(session()->has('etat'))
        <div class="alert alert-success" role="alert">
            {{session()->get('etat')}}
        </div>

    @endif

    <table class="table table-hover table-info table-sm mt-4 ">
    <thead>
        <tr class="bg-primary">
            <th scope="col">#</th>
            <th scope="col">Matricule</th>
            <th scope="col">Type</th>
            <th scope="col">Agence</th>
        </tr>
        </thead>
        <tbody>
        @forelse ($vhls as $vhli)
            <tr>
                <th scope="row">{{ $vhli->id }}</th>
                <td><a href="{{ route('vhl.show',['vhl'=>$vhli->id]) }}">{{ $vhli->matricule  ?? 'SANS'}}</a></td>
                <td>{{ $vhli->categorie->nom ?? 'SANS' }}</td>
                <td>{{ $vhli->agence->nom  ?? 'SANS'}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
