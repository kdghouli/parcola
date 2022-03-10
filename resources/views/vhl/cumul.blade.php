@extends('.page.layer')

@section('content')


@foreach($agenci as $agenc )

                <h3>{{$agenc->nom}}</h3>

                <table class="table table-hover table-dark table-sm mt-4 ">
                    <thead>
                    <tr class="bg-dark">
                        <th scope="col">#</th>
                        <th scope="col">Matricule</th>
                        <th scope="col">Type</th>
                        <th scope="col">Agence</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($vhlcumul as $vhli)

                        @if($agenc->nom == $vhli->agence->nom)
                            
                        <tr>
                            <th scope="row">{{ $vhli->id }}</th>
                            <td><a href="{{ route('vhl.show',['vhl'=>$vhli->id]) }}">{{ $vhli->matricule  ?? 'SANS'}}</a></td>
                            <td>{{ $vhli->categorie->nom ?? 'SANS' }}</td>
                            <td>{{ $vhli->intitule->nom  ?? 'SANS'}}</td>
                        </tr>

                        @endif

                        @endforeach
                    </tbody>
                </table>

                @foreach($agg as $aggo){{$aggo->vhls_count}}
                @endforeach

@endforeach

@endsection
