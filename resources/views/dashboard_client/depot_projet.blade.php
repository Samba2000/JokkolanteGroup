<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Déposer un projet</title>
    <link rel="icon" href="{{ asset('assets/images/logo.ico') }}" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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



    <div class="container-fluid depot-projet" id="depot2">
        <h1>Deposez votre projet</h1>
        <div class="container depot">
            <div class="row">
                <button class="zip">
                    <a href="">Téléchargez votre fichier ZIP dans “ci-dessous” (<span>attention, seuls
                            les fichiers en dessous de 200 Mo sont acceptés</span>)</a></button>
                <h4>Dossier principal de votre projet</h4>
                <div class="col-md-12 mb-3">
                    <div class="col-md-6 choix-fichier d-flex justify-content-between">
                        <button class="btn">
                            Choisissez un ficher
                        </button>
                    </div>
                    <div class="col-md-6 dossier-actuel  d-flex justify-content-end">
                        <button class="btn">
                            Dossier actuel
                        </button>
                    </div>
                </div>

                <div class="col-md-12 mb-3">
                    <div class="col-md-12 trait"></div>
                </div>

                <div class="col-md-12 mb-3">
                    <div class="col-md-6 choix-fichiers d-flex justify-content-between">
                        <button class="btn">
                            Compresser vos fichiers en ZIP
                        </button>
                    </div>
                    <div class="col-md-6 ajout-dossier  d-flex justify-content-end">
                        <button class="btn">
                            Ajouter un dossier
                        </button>
                    </div>
                </div>
                <form class="mb-3" method="post" action="">
                    @csrf
                    <div class="dropzone">
                        <label for="file-input">
                          <img src="http://100dayscss.com/codepen/upload.svg" class="upload-icon"/>
                        </label>

                        <input id="file-input" type="file" class="upload-input" name="fprojet" />
                        <p>Glisser-déposer un fichier ou cliquer ici.</p>
                      </div>
                    {{-- <div class="dropzone">
                        <img src="http://100dayscss.com/codepen/upload.svg" class="upload-icon" />
                        <input type="file" class="upload-input" name="fprojet" />
                        <p>Glisser-déposer un fichier ou cliquer ici.</p>
                    </div> --}}
                    <div class="col-md-12 apres-upload">
                        <div class="col-md-4">
                            <p>Fichiers acceptés : .zip</p>
                        </div>
                        <div class="col-md-4">
                            <p>Taille maximale acceptée : 200 MO</p>
                        </div>
                    </div>


                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"
                            name="cond1">
                        <label class="form-check-label" for="flexCheckDefault">
                            Je certifie que l’ensemble des information ci-dessus sont correctent.
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                            name="cond2">
                        <label class="form-check-label" for="flexCheckChecked">
                            J’ai lu et j’ai accepte le <span> &nbsp; Reglement de dotation du dossier projet.</span>
                        </label>
                    </div>

                    <div class="col-md-12 mb-3">
                        <div class="col-md-12 choix-fichiers d-flex justify-content-between">
                            <button class="sauvegarde">Je sauvegarde mes informations</button>
                        </div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <div class="col-md-12 choix-fichiers d-flex justify-content-center">
                            <button type="submit" class="valider">Je valide
                                    mon dépôt de projet</button>
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
    <script src="{{ asset('assets/js/pagination.js') }}"></script>

</body>

</html>
