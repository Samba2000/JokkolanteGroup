<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mes Projets</title>
    <link rel="icon" href="{{ asset('assets/images/logo.ico') }}" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/projet.css') }} ">

    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@700&family=Ubuntu&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>

<body>

    <div class="container-fluid projet">
        <div class="col-sm bloc0">
            <div class="d-flex flex-row col-md-12">
                <div class="col-md-3 d-flex flex-row align-items-center justify-content-start log">
                    <a href="{{ route('home') }}"><img src="{{ asset('assets/images/logo.ico') }}" alt=""></a>

                </div>
                <div class="col-md-6 d-flex flex-row align-items-center justify-content-center">
                    <div class="form-group has-search">
                        <img src="{{ asset('assets/images/search.png') }}" alt="">
                        <input type="text" id="search" class="" placeholder="Recherche">
                    </div>
                </div>
                <div class="col-md-3 d-flex flex-row align-items-center justify-content-end">
                    <div class="rond">
                        <div class="dropdown menu-projet">
                            <img src="{{ asset('assets/images/burg.png') }}" alt="" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                            <ul class="dropdown-menu scroller" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">
                                        <h5>Mon compte</h5>
                                    </a></li>
                                <li><a class="dropdown-item" href="#"><img
                                            src="{{ asset('assets/images/icon-menu(8).png') }}" alt="">
                                        <p>Mes infos de connexion</p>
                                    </a></li>
                                <li><a class="dropdown-item" href="#"><img
                                            src="{{ asset('assets/images/icon-menu(9).png') }}" alt="">
                                        <p>Mes coordonnées</p>
                                    </a></li>
                                <li><a class="dropdown-item" href="#"><img
                                            src="{{ asset('assets/images/icon-menu(3).png') }}" alt="">
                                        <p>Mes alertes e-mail</p>
                                    </a></li>
                                <li><a class="dropdown-item" href="#"><img
                                            src="{{ asset('assets/images/icon-menu(4).png') }}" alt="">
                                        <p>Mes factures</p>
                                    </a></li>
                                <li><a class="dropdown-item" href="#"><img
                                            src="{{ asset('assets/images/icon-menu(5).png') }}" alt="">
                                        <p>Ma carte bancaire</p>
                                    </a></li>

                                <li><a class="dropdown-item" href="#">
                                        <h5>Mes projets</h5>
                                    </a></li>
                                <li><a class="dropdown-item" href="#"><img
                                            src="{{ asset('assets/images/icon-menu(6).png') }}" alt="">
                                        <p>Gérer mes projets</p>
                                    </a></li>
                                <li><a class="dropdown-item" href="#"><img
                                            src="{{ asset('assets/images/icon-menu(7).png') }}" alt="">
                                        <p>Créer un nouveau projet</p>
                                    </a></li>

                                <li><a class="dropdown-item" href="#">
                                        <h5>Aide</h5>
                                    </a></li>
                                <li><a class="dropdown-item" href="#"><img
                                            src="{{ asset('assets/images/icon-menu(1).png') }}" alt="">
                                        <p>Questions fréquentes</p>
                                    </a></li>
                                <li><a class="dropdown-item" href="#"><img
                                            src="{{ asset('assets/images/icon-menu(2).png') }}" alt="">
                                        <p> Nous contacter</p>
                                    </a></li>
                                <li class="trait-menu-projet"></li>

                                <li><a class="dropdown-item" href="#">
                                        <h5>Se déconnecter</h5>
                                    </a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div class="d-flex flex-row col-md-12">
                <div class="col-md-12 d-flex flex-row align-items-center justify-content-center cr-projet">
                    <button>
                        <img src="{{ asset('assets/images/plus.png') }}" alt="">
                        Créer un nouveau projet
                    </button>
                </div>
            </div>
            <div class="d-flex flex-row col-md-12 projets">
                <div class="col-md-6 d-flex flex-row align-items-center justify-content-start">
                    <p>Projet (1)</p>
                </div>
                <div class="col-md-6 d-flex flex-row align-items-center justify-content-end">
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Plus récents
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Ouvert</a></li>
                            <li><a class="dropdown-item" href="#">Terminés</a></li>
                            <li><a class="dropdown-item" href="#">En cours</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-row col-md-12 projets-termines">
                <div class="col-md-4 d-flex flex-row align-items-center justify-content-center trait-projet">

                </div>
                <div class="col-md-4 d-flex flex-row align-items-center justify-content-center ">
                    <p>Projets terminés</p>
                </div>
                <div class="col-md-4 d-flex flex-row align-items-center justify-content-center trait-projet">

                </div>
            </div>

            <div class="d-flex flex-row col-md-12 projets-listes">
                <div class="col-md-12 listes">
                    <div class="col-md-12 d-flex flex-row align-items-center justify-content-center">
                        <div class="h1">Site E-commerce</div>
                        <div class="span">20 heures</div>
                    </div>
                    <div class="h5">Aucune offre</div>
                    <div class="h4 col-md-12 d-flex flex-row align-items-center">
                        <div class="p"></div> Modéré
                    </div>
                </div>
            </div>
        </div>
            <div class="d-flex flex-row trait"></div>
        <div class="col-sm bloc1" id="message">
            <div class="col-md-12 message">
                <p>Message d’un administrateur Jokkolante.sn</p>
            </div>
        </div>
    </div>

</body>

</html>
