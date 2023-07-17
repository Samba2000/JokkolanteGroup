<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des projets</title>
    <link rel="icon" href="{{ asset('assets/images/logo.ico') }}" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/liste-projet.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/css/dash_prestataires.css') }} ">

    <link rel="stylesheet" href="{{ asset('assets/css/header_dash_client.css') }} ">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/dash_client.css') }} "> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">

    <link href='https://fonts.googleapis.com/css?family=Manrope' rel='stylesheet'>

    <link rel="stylesheet" href="ttps://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@700&family=Ubuntu&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

</head>

<body>

    @include('dashboard_client.navbar.header')

    <div class="pro">
        @include('dashboard_client.navbar.profil')

        <div class="container-fluid infos-projet">
            <h1>Liste des projets</h1>
            <button type="button" class="btn nouveau-projet" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Creer un nouveau projet
            </button>
            <div class="modal fade modal1" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">

                        <form method="post" action="{{ route('ajout_projet') }}">
                            @csrf
                            <div class="col-md-12 ">
                                <div class="col-md-12">
                                    <label for="exampleFormControlInput1" class="form-label">Titre du projet</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Site e-commerce" name="titre">
                                </div>
                            </div>
                            <div class="col-md-12 ">
                                <div class="col-md-12">
                                    <label for="exampleFormControlInput1" class="form-label">Date de debut</label>
                                    <input type="date" class="form-control" id="exampleFormControlInput1"
                                        placeholder="11/10/2022" name="date_debut">
                                </div>
                            </div>
                            <div class="col-md-12 ">
                                <div class="col-md-12">
                                    <label for="exampleFormControlInput1" class="form-label">Date de fin</label>
                                    <input type="date" class="form-control" id="exampleFormControlInput1"
                                        placeholder="11/11/2022" name="date_fin">
                                </div>
                            </div>

                            <div class="col-md-12 mt-3">
                                <div class="col-md-6 except">
                                    <button class="btn nouveau-projet">
                                        Créer
                                    </button>
                                </div>
                            </div>
                        </form>

                        <ul class="error">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table id="example" class="table" style="width:100%">
                    <thead>
                        <tr>
                            <th scope="col">Nom</th>
                            <th scope="col">Prenom</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Titre du projet</th>
                            <th scope="col">Date de debut</th>
                            <th scope="col">Date de fin</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projets as $key => $item)
                            <tr>
                                <td>{{ $item->nom }}</td>
                                <td>{{ $item->prenom }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->titre }}</td>
                                <td>{{ $item->date_debut }}</td>
                                <td>{{ $item->date_fin }}</td>
                                <td>
                                    <form action="" method="Post">
                                        <a href="{{ route('edit_projet', $item->id) }}" data-bs-toggle="modal"
                                            data-bs-target="#edit_projet{{ $item->id }}">
                                            <img src="{{ asset('assets/images/edit.jpg') }}" alt=""></a>
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('delete-projet', $item->id) }}"><img
                                                src="{{ asset('assets/images/delete.png') }}" alt=""></a>
                                    </form>
                                </td>
                            </tr>
                            <div class="modal fade" id="edit_projet{{ $item->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <form method="post" action="{{ route('edit_projet', $item->id) }}">
                                            @csrf
                                            <input type="text" class="form-control" name="id"
                                                value="{{ $item->id }}" hidden>
                                            <div class="col-md-12 ">
                                                <div class="col-md-12">
                                                    <label for="exampleFormControlInput1" class="form-label">Titre du
                                                        projet</label>
                                                    <input type="text" class="form-control"
                                                        id="exampleFormControlInput1" placeholder="Site e-commerce"
                                                        name="titre" value="{{ $item->titre }}" id="titre">
                                                </div>
                                            </div>
                                            <div class="col-md-12 ">
                                                <div class="col-md-12">
                                                    <label for="exampleFormControlInput1" class="form-label">Date de
                                                        debut</label>
                                                    <input type="date" class="form-control"
                                                        id="exampleFormControlInput1" placeholder="11/10/2022"
                                                        name="date_debut" value="{{ $item->date_debut }}"
                                                        id="date_debut">
                                                </div>
                                            </div>
                                            <div class="col-md-12 ">
                                                <div class="col-md-12">
                                                    <label for="exampleFormControlInput1" class="form-label">Date de
                                                        fin</label>
                                                    <input type="date" class="form-control"
                                                        id="exampleFormControlInput1" placeholder="11/11/2022"
                                                        name="date_fin" value="{{ $item->date_fin }}"
                                                        id="date_fin">
                                                </div>
                                            </div>

                                            <div class="col-md-12 mt-3">
                                                <div class="col-md-6 except">
                                                    <button class="btn nouveau-projet">
                                                        Modifier
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                        <ul class="error">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="{{ asset('assets/js/pagination.js') }}"></script>

</body>

</html>
