<!DOCTYPE html>
<html lang="en">

<head>
    @yield('head')
</head>

<body>
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <div class="logo">
                <img src="{{ asset('assets/images/image 24.png') }}" width="50px" height="50px" alt="Your Image">
            </div>
            <div class="search-wrapper">
                <img src="{{ asset('assets/images/akar-icons_search.png') }}" width="30px" height="30px"
                    alt="Your Image">
                <input type="search" placeholder="Recherche" class="inp">
            </div>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        Mon compte
                        <i class="fa">
                            <img src="{{ asset('assets/images/image 27.png') }}" alt="Your Image">
                        </i>
                    </a>
                    <ul class="nav1">
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                Profil administrateur
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                Modifier mot de passe
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('factures') }}" class="nav-link">
                                Mes factures
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        Mes clients
                        <i class="fa">
                            <img src="{{ asset('assets/images/image 27.png') }}" alt="Your Image">
                        </i>
                    </a>
                    <ul class="nav1">
                        <li class="nav-item">
                            <a href="{{ route('modification_mdp') }}" class="nav-link">
                                Enregistrements de clients
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="pages/widgets.html" class="nav-link">
                        Mes projets
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/widgets.html" class="nav-link">
                        Formation
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        Parametre
                        <i class="fa">
                            <img src="{{ asset('assets/images/image 27.png') }}" alt="Your Image">
                        </i>
                    </a>
                    <ul class="nav1">
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                Supprimer mon compte
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                Modifier logo
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-content">
        <header>
            <label for="nav-toggle" class="tog">
                <span class="fas1"> <img src="{{ asset('assets/images/image 25.png') }} "width="20px" height="20px"
                        alt="Your Image"></span>
            </label>
            <div class="nav2"><a href="" class="none">Accueil</a></div>
            <div class="nav2">
                <a href="" class="none">Profil</a>
            </div>
            <div class="nav2">
                <a href="" class="none">Se deconnecter</a></h1>
            </div>
        </header>
        <main>
            @yield('content')
        </main>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var icons = document.querySelectorAll('.nav-item .fa');
            icons.forEach(function(icon) {
                var parentItem = icon.closest('.nav-item');
                icon.addEventListener('click', function() {
                    parentItem.classList.toggle('open');
                });
            });
        });
    </script>
    @yield('foot')
</body>

</html>
