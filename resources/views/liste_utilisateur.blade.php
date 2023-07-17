@extends('dashbord')
@section('title', 'Liste des utilisateurs')
@section('content')
    <div class="liste_utlisateurs">
        <div class="col-sm-12 d-flex justify-content-center">
            <h1 class="m-0">Bienvenue chez l’admin Jokkalante</h1>
        </div>

        <div class="table-responsive">
            <table id="example" class="table" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">Numero</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prenom</th>
                        <th scope="col">Adresse e-mail</th>
                        <th scope="col">Telephone</th>
                        <th scope="col">Adresse</th>
                    </tr>
                </thead>
                @foreach ($clients as $key => $item)
                    <tbody>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $item->nom }}</td>
                        <td>{{ $item->prenom }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->telephone }}</td>
                        <td>{{ $item->adresse }}</td>

                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>
@endsection
