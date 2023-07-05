<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Créer un projet</title>
    <link rel="icon" href="{{ asset('assets/images/logo.ico') }}" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/create-projet.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/css/validate-projet.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/css/depot-projet.css') }} ">

    <link rel="stylesheet" href="{{ asset('assets/css/header_dash_client.css') }} ">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/dash_client.css') }} "> --}}
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}"> --}}

    <link href='https://fonts.googleapis.com/css?family=Manrope' rel='stylesheet'>

    <link rel="stylesheet" href="ttps://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@700&family=Ubuntu&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</head>

<body>

    @include('dashboard_client.navbar.header')
    <div class="container-fluid infos-projets">
        {{-- <h4>#mBedello Camara DANSOKHO</h4> --}}
        <div class="rectangle-profil">
            <div class="rectanggle-bleu">
                <img src="{{ asset('assets/images/profil-dash.png') }}" alt="">
            </div>
        </div>
    </div>

    <div class="container-fluid create-projet" id="depot1">
        <h1>Deposez votre projet</h1>
        <div class="container">
            <div class="row">
                <form method="post" action="">
                    @csrf
                    <div class="col-md-12 mb-3">
                        <div class="col-md-4">
                            <label for="exampleFormControlInput1" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="nom">
                        </div>
                        <div class="col-md-4">
                            <label for="exampleFormControlInput1" class="form-label">Prénom</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="prenom">
                        </div>
                        <div class="col-md-4">
                            <label for="exampleFormControlInput1" class="form-label">E-mail</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="email">
                        </div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <div class="col-md-6">
                            <label for="exampleFormControlInput1" class="form-label">Titre du projet</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="titre">
                        </div>
                        <div class="col-md-6">
                            <label for="exampleFormControlInput1" class="form-label">Acronyme projet</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="acronyme">
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="col-md-6">
                            <label for="exampleFormControlInput1" class="form-label">Date de debut</label>
                            <input type="date" class="form-control" id="exampleFormControlInput1" name="date_debut">
                        </div>
                        <div class="col-md-6">
                            <label for="exampleFormControlInput1" class="form-label">Date de fin</label>
                            <input type="date" class="form-control" id="exampleFormControlInput1" name="date_fin">
                        </div>
                    </div>

                    <div class="col-md-12 mb-3" id="except">
                        <div class="col-md-6 except">
                            <input class="btn nouveau-projet" type="submit" name="valider" value="Créer">
                        </div>
                        <div class="col-md-6 except">
                            <a href="{{ route('liste_projet') }}"><button class="btn nouveau-projet">
                                    Retourner à la liste
                                </button></a>
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

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

    {{-- <script src="{{ asset('assets/js/pagination.js') }}"></script> --}}
</body>

</html>
