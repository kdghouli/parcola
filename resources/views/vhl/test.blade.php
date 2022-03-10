@extends('.page.layer')

@section('content')
    <h1>Test Page</h1>
    {{-- {{dd($vhls[40]->status())}} --}}


    {{-- $user = App\User::find(1); --}}

    {{-- @foreach ($vhls as $role) --}}

    {{-- {{$role->matricule}} --}}
    {{-- {{$role->agence->nom}} --}}
    {{-- {{$role->intitule->nom}} --}}
    {{-- @forelse($role->status as $roo) --}}
    {{--  --}}
    {{-- <span class="badge badge-pill badge-danger">{{$roo->etat}}</span> --}}
    {{-- @empty --}}
    {{-- @endforelse --}}
    {{-- <br> --}}
    {{-- @endforeach --}}



    @foreach ($count as $counta)
        <button type="button" class="btn btn-dark my-2">
            {{ $counta->nom }} <span class="badge badge-light">{{ $counta->vhls_count }}</span>
        </button>

        <br>


        <table class="table table-striped table-sm table-dark">
            <thead class="bg-danger">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Matricule</th>
                    <th scope="col">Agence</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>

            @forelse($vhls as $vhl)
                @if ($vhl->agence_id == $counta->id)
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>{{ $vhl->matricule }}</td>
                            <td>{{ $vhl->intitule->nom }}</td>
                            <td>
                                @forelse($vhl->status as $roo)
                                    <span class="badge badge-pill badge-danger">{{ $roo->etat }}</span>
                                @empty
                                @endforelse
                            </td>
                        </tr>
                @endif
                @empty
                @endforelse









                </tbody>
            </table>
        @endforeach

        <br>
    @endsection
