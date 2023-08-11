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
    <style>
        #message {
            display: none;
        }
    </style>
</head>

<body>

    <div class="container-fluid col-md-12 projet">
        <div class="col-sm col-md-6 bloc0">
            <div class="d-flex flex-row col-md-12">
                <div class="col-md-3 d-flex flex-row align-items-center justify-content-start log">
                    <a href="{{ route('home') }}"><img src="{{ asset('assets/images/logo.ico') }}" alt=""></a>

                </div>
                <div class="col-md-6 d-flex flex-row align-items-center justify-content-center">
                    <div class="form-group has-search">
                        <form method="get" action="{{ route('recherche') }}">
                            @csrf
                            <img src="{{ asset('assets/images/search.png') }}" alt="">
                            <input type="text" id="search" class="" placeholder="Recherche"
                                name="recherche">
                        </form>
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
                        <a href="{{ route('create_projet') }}"><img src="{{ asset('assets/images/plus.png') }}"
                                alt="">
                            <p>Créer un nouveau projet</p>
                        </a>
                    </button>
                </div>
            </div>
            <div class="d-flex flex-row col-md-12 projets">
                <div class="col-md-6 d-flex flex-row align-items-center justify-content-start">
                    <p>Projet ({{ count($projets) }})</p>
                </div>
                <div class="col-md-6 d-flex flex-row align-items-center justify-content-end">
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Plus récents
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="{{ route('projet_ouvert') }}">
                                    Ouvert
                                </a></li>
                            <li><a class="dropdown-item" href="{{ route('projet_termine') }}">Terminés</a></li>
                            <li><a class="dropdown-item" href="{{ route('projet_encours') }}">
                                    En cours
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-row col-md-12 projets-termines">
                <div class="col-md-4 d-flex flex-row align-items-center justify-content-center trait-projet">

                </div>

                @php
                    $route = request()
                        ->route()
                        ->getName();
                @endphp

                <div class="col-md-4 d-flex flex-row align-items-center justify-content-center ">
                    <p>
                        @if ($route == 'projet_ouvert')
                            Projets Ouverts
                        @elseif ($route == 'projet_encours')
                            Projets Encours
                        @elseif ($route == 'projet_termine')
                            Projets Terminés
                        @elseif($route == 'projet')
                            Liste des Projets
                        @endif
                    </p>
                </div>
                <div class="col-md-4 d-flex flex-row align-items-center justify-content-center trait-projet">

                </div>
            </div>
            @if (count($projets) == 0)
                <div class="d-flex flex-row col-md-12 resultat">
                    <div class="col-md-12 d-flex flex-row align-items-center justify-content-center cr-projet">
                        <p>Pas de résultat</p>
                    </div>
                </div>
            @elseif (count($projets) > 0)
                <div class="d-flex flex-row col-md-12 projets-listes" id="bloc1">
                    <div class="col-md-12 listes">
                        @foreach ($projets as $key => $item)
                            <div class="list" id="list{{ $key }}">
                                <div class="col-md-12 d-flex flex-row align-items-center justify-content-center">
                                    <div class="h1">{{ $item->titre }}</div>
                                    <div class="span">
                                        @if ($jours[$key] > 0)
                                            {{ $jours[$key] }}j:
                                        @endif
                                        @if ($heures[$key] > 0)
                                            {{ $heures[$key] }}h:
                                        @endif
                                        @if ($minutes[$key] > 0)
                                            {{ $minutes[$key] }}m
                                        @endif
                                        @if ($jours[$key] < 0 && $minutes[$key] < 0 && $heures[$key] < 0 && $secondes[$key] < 0)
                                            À l'instant
                                        @endif
                                    </div>
                                </div>
                                <div class="h5">
                                    @if ($item->offre == 0)
                                        Aucune Offre
                                    @else
                                        {{ $item->offre }}
                                    @endif
                                </div>
                                <div class="h4 col-md-12 d-flex flex-row align-items-center">
                                    <div class="p"></div> {{ $item->statut }}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
        {{-- <div class="d-flex flex-row col-md-2 trait">
            <div class="vr"></div>
        </div> --}}
        @if (count($projets) == 0)
            <div class="col-sm col-md-6 bloc1" id="bloc2">
                <div class="col-md-12">
                    <p>Déposez votre premier projet et trouvez un freelance !</p>
                </div>
                <div class="col-md-12">
                    <button><a href="{{ route('create_projet') }}">Déposer un projet</a></button>
                </div>
                <div class="bg_projet">
                    <div class="col-md-12">
                        <img src="{{ asset('assets/images/logo.ico') }}" alt="">
                    </div>
                    <div class="col-md-12">
                        <h5>1ére plateforme de freelance Africaine</h5>
                    </div>
                </div>
            </div>
        @elseif (count($projets) > 0)
            <div class="col-sm col-md-6 bloc1">
                <div class="col-md-12 message" id="message">
                    <p>Message d’un administrateur Jokkolante.sn</p>
                </div>
            </div>
        @endif
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    {{-- <script src="{{ asset('assets/js/upload-file.js') }}"></script> --}}
    <script type="text/javascript">
        $(function() {


            let message = document.getElementById("message");
            var projets = [];
            <?php foreach ($projets as $key => $projet){?>
            projets.push({{ $key + 1 }});
            <?php } ?>

            for (var i = 0; i < projets.length; i++) {

                document.getElementById("list" + i).addEventListener("click", () => {
                    message.style.display = "block";
                });
            }

        });
    </script>
</body>

</html>
