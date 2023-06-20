{{-- <div class="bg fixed-top">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('assets/images/logo.ico') }}" alt="">
            </a>

            <div class="collapse navbar-collapse">

                <div class="d-flex profil">
                    <div class="btn">
                        <div class="dropdown">
                            <img src="{{ asset('assets/images/burger.png') }}" alt="" class="burger"
                                id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item gras" href="#">Connexion</a></li>
                                <li><a class="dropdown-item gras" href="#">Inscription</a></li>
                                <div class="trait"></div>
                                <li><a class="dropdown-item" href="#">Trouver des freelances</a></li>
                                <li><a class="dropdown-item" href="#">Trouver des clients</a></li>
                                <li><a class="dropdown-item" href="#">Aide</a></li>
                            </ul>
                            <img src="{{ asset('assets/images/profil.png') }}" alt="" class="prof">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div> --}}
<!-- Navbar -->
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
                        <a class="nav-link" href="{{ route('projet') }}">
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

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item gras" href="#">Connexion</a></li>
                                <li><a class="dropdown-item gras" href="#">Inscription</a></li>
                                <div class="trait"></div>
                                <li><a class="dropdown-item" href="#">Trouver des freelances</a></li>
                                <li><a class="dropdown-item" href="#">Trouver des clients</a></li>
                                <li><a class="dropdown-item" href="#">Aide</a></li>
                            </ul>
                            <a href="{{ route('dashboard') }}"><img src="{{ asset('assets/images/profil.png') }}" alt="" class="prof"></a>
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
<!-- Navbar -->
