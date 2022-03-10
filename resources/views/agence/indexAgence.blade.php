@extends('page.layer')

@section('content')
    <table class="table table-hover table-dark table-sm mt-4 ">
        <thead>
            <tr class="bg-warning">
                <th scope="col">#</th>
                <th scope="col">Matricule</th>
                <th scope="col">Marque</th>
                <th scope="col">Agence</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($agences as $agence)
                <tr>
                    <th scope="row">{{ $agence->id }}</th>
                    <td>
                        @foreach ($agence->vhls as $vv)
                            {{ $vv->matricule }}
                            <br>
                        @endforeach
                    </td>
                    <td>{{ $agence->nom }}</td>
                    <td>{{ $agence->nom }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
