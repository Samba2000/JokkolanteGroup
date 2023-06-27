<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('assets/css/dashbord.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />



</head>

<body>
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <div class="logo">
                <img src="{{ asset('assets/images/image 24.png') }}" width="60px" height="60px" alt="Your Image">
            </div>
            <div class="search-wrapper">
                <img src="{{ asset('assets/images/akar-icons_search.png') }}" width="30px" height="30px"
                    alt="Your Image">
                <input type="search" placeholder="Recherche">
            </div>
        </div>
        <div class="sidebar-menu">
            <ul>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <p>
                            Mon compte
                            <i class="fas fa-angle-left right">
                                <img src="{{ asset('assets/images/image 27.png') }}"width="30px" height="30px"
                                    alt="Your Image">

                            </i>
                        </p>
                    </a>
                    <ul class="nav1">
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <p>Profil administrateur</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <p>Modifier mot de passe</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <p>Mes factures</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <p>
                            Mes clients
                            <i class="fas fa-angle-left right">
                                <img src="{{ asset('assets/images/image 27.png') }}"width="30px" height="30px"
                                    alt="Your Image">
                            </i>
                        </p>
                    </a>
                    <ul class="nav1">
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <p>Enregistrements de clients</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="pages/widgets.html" class="nav-link">
                        <p>Mes projets</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/widgets.html" class="nav-link">
                        <p>Formation</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <p>
                            Parametre
                            <i class="fas fa-angle-left right">
                                <img src="{{ asset('assets/images/image 27.png') }}"width="30px" height="30px"
                                    alt="Your Image">
                            </i>
                        </p>
                    </a>
                    <ul class="nav1">
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <p>Supprimer mon compte</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <p>Modifier logo</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-content">
        <header>
            <label for="nav-toggle">
                <span class="fas1 fa-bars"> <img src="{{ asset('assets/images/Group 26 copy.png') }} "width="15px"
                        height="15px" alt="Your Image"></span>
            </label>
            <div class="nav2"><a href="" class="none">Accueil</a></div>
            <div class="nav2">
                <a href="" class="none">Profit</a>
            </div>
            <div class="nav2">
                <a href="">Se deconnecter</a></h1>
            </div>
        </header>
        <main>
            <div class="col-sm-12 d-flex justify-content-center">
                <h1 class="m-0">Bienvenue chez l’admin Jokkalante</h1>
            </div>
            <div class="cards d-flex justify-content-center">

                <div class="card-single ">
                    <h4>Projet</h4>
                    <h3>Ternimer</h3>
                    <h4>50</h4>
                </div>
                <div class="card-single">
                    <h4>Projet</h4>
                    <h3>Ternimer</h3>
                    <h4>50</h4>
                </div>
                <div class="card-single">
                    <h4>Projet</h4>
                    <h3>Ternimer</h3>
                    <h4>50</h4>
                </div>
            </div>
            <div class="d-flex contenu justify-content-center">
                <img src="{{ asset('assets/images/image 29.png') }}"width="300px" height="300px" alt="Your Image">
            </div>
        </main>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var icons = document.querySelectorAll('.nav-item .fas');

            icons.forEach(function(icon) {
                var parentItem = icon.closest('.nav-item');

                icon.addEventListener('click', function() {
                    parentItem.classList.toggle('open');
                });
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
