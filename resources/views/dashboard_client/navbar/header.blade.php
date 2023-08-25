@extends('dashboard_client.base')

@section('header')
    <div class="bg fixed-top">
        <nav class="navbar navbar-expand-lg navbar-light">
            <!-- Container wrapper -->
            <div class="container-fluid">

                <!-- Collapsible wrapper -->
                <div class="collapse navbar-collapse">
                    <!-- Navbar brand -->
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="{{ asset('assets/images/logo.ico') }}" alt="">
                    </a>
                    <!-- Left links -->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <p>Projet</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <p>Prestataires</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <p>Aide</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('liste_projet') }}">
                                <button class="btn bt1">
                                    <img src="{{ asset('assets/images/can.png') }}" alt="">
                                    Gérer mes projets
                                </button>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('projet') }}">
                                <button class="btn bt2">
                                    Publier un projet
                                </button>
                            </a>
                        </li>
                    </ul>
                    <!-- Left links -->

                    <div class="d-flex align-items-center profil">
                        <div class="bts">
                            <div class="dropdown">
                                <img src="{{ asset('assets/images/burger.png') }}" alt="" class="burger"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">

                                @auth
                                    <ul class="dropdown-menu scroller menu_auth" aria-labelledby="dropdownMenuButton1">
                                        <li> <h5>Mon compte</h5> </li>
                                        <li><a class="dropdown-item" href="{{ route('edit_profil_client', Auth::user()->id) }}"><img
                                                    src="{{ asset('assets/images/icon-menu(8).png') }}" alt="">
                                                <p>Mes infos de connexion</p>
                                            </a></li>
                                        <li><a class="dropdown-item" href="{{ route('edit_profil_client', Auth::user()->id) }}"><img
                                                    src="{{ asset('assets/images/icon-menu(9).png') }}" alt="">
                                                <p>Mes coordonnées</p>
                                            </a></li>
                                        <li><a class="dropdown-item" href="#"><img
                                                    src="{{ asset('assets/images/icon-menu(3).png') }}" alt="">
                                                <p>Mes alertes e-mail</p>
                                            </a></li>
                                        <li><a class="dropdown-item" href="{{ route('factures') }}"><img
                                                    src="{{ asset('assets/images/icon-menu(4).png') }}" alt="">
                                                <p>Mes factures</p>
                                            </a></li>
                                        <li><a class="dropdown-item" href="#"><img
                                                    src="{{ asset('assets/images/icon-menu(5).png') }}" alt="">
                                                <p>Ma carte bancaire</p>
                                            </a></li>

                                        <li> <h5>Mes projets</h5> </li>
                                        <li><a class="dropdown-item" href="{{ route('liste_projet') }}"><img
                                                    src="{{ asset('assets/images/icon-menu(6).png') }}" alt="">
                                                <p>Gérer mes projets</p>
                                            </a></li>
                                        <li><a class="dropdown-item" href="{{ route('create_projet') }}"><img
                                                    src="{{ asset('assets/images/icon-menu(7).png') }}" alt="">
                                                <p>Créer un nouveau projet</p>
                                            </a></li>

                                        <li> <h5>Aide</h5> </li>
                                        <li><a class="dropdown-item" href="#"><img
                                                    src="{{ asset('assets/images/icon-menu(1).png') }}" alt="">
                                                <p>Questions fréquentes</p>
                                            </a></li>
                                        <li><a class="dropdown-item" href="#"><img
                                                    src="{{ asset('assets/images/icon-menu(2).png') }}" alt="">
                                                <p> Nous contacter</p>
                                            </a></li>
                                        <li class="trait-menu-projet"></li>

                                        <li><a class="dropdown-item" href="{{ route('logout') }}">
                                                <h5>Se déconnecter</h5>
                                            </a></li>
                                    </ul>
                                @endauth
                                @guest
                                    <ul class="dropdown-menu menu_guest" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item gras" href="#">Connexion</a></li>
                                        <li><a class="dropdown-item gras" href="#">Inscription</a></li>
                                        <div class="trait"></div>
                                        <li><a class="dropdown-item" href="#">Trouver des freelances</a></li>
                                        <li><a class="dropdown-item" href="#">Trouver des clients</a></li>
                                        <li><a class="dropdown-item" href="#">Aide</a></li>
                                    </ul>
                                @endguest

                                <a href="{{ route('edit_profil_client', Auth::user()->id) }}"><img
                                        src="{{ asset('assets/images/profil.png') }}" alt="" class="prof"></a>
                                {{-- <a href="{{ route('edit_profil_client', Auth::user()->id) }}"><img src="{{ asset('assets/images/profil.png') }}" alt="" class="prof"></a> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Collapsible wrapper -->

                <!-- Right elements -->
                <!-- Right elements -->
            </div>
            <!-- Container wrapper -->
        </nav>
    </div>
@endsection
