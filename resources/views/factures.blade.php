<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mes factures</title>
    <link rel="icon" href="{{ asset('assets/images/logo.ico') }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('assets/css/dashbord.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/factures.css') }}">

    <link href='https://fonts.googleapis.com/css?family=Manrope' rel='stylesheet'>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="ttps://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@700&family=Ubuntu&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

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
                        <i class="fas fa-angle-left right">
                            <img src="{{ asset('assets/images/image 27.png') }}"width="30px" height="30px"
                                alt="Your Image">

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
                        <i class="fas fa-angle-left right">
                            <img src="{{ asset('assets/images/image 27.png') }}"width="30px" height="30px"
                                alt="Your Image">
                        </i>

                    </a>
                    <ul class="nav1">
                        <li class="nav-item">
                            <a href="{{ route('liste_utilisateur') }}" class="nav-link">
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
                        <i class="fas fa-angle-left right">
                            <img src="{{ asset('assets/images/image 27.png') }}"width="30px" height="30px"
                                alt="Your Image">
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
                <span class="fas1 fa-bars"> <img src="{{ asset('assets/images/image 25.png') }} "width="20px"
                        height="20px" alt="Your Image"></span>
            </label>
            <div class="nav2"><a href="" class="none">Accueil</a></div>
            <div class="nav2">
                <a href="" class="none">Profit</a>
            </div>
            <div class="nav2">
                <a href="" class="none">Se deconnecter</a></h1>
            </div>
        </header>
        <main>
            <div class="col-sm-12 d-flex justify-content-center">
                <h1 class="m-0">Bienvenue chez l’admin Jokkalante</h1>
            </div>

            <div class="input">
                <input type="text" name="" id="" placeholder="Recherche">
            </div>
            <div class="table-responsive">
                <table id="example" class="table" style="width:100%">
                    <thead>
                        <tr>
                            <th scope="col">Numero#</th>
                            <th scope="col">Date de création</th>
                            <th scope="col">Statut</th>
                            <th scope="col">Po#</th>
                            <th scope="col">Total</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>220</td>
                            <td>24/10/2022</td>
                            <td>Directeur</td>
                            <td>240</td>
                            <td>7500</td>
                            <td>
                                <img src="{{ asset('assets/images/delete.png') }}" alt="">
                                <img src="{{ asset('assets/images/edit.jpg') }}" alt="">
                            </td>

                        </tr>
                        <tr>
                            <td>220</td>
                            <td>24/10/2022</td>
                            <td>Développeur</td>
                            <td>300</td>
                            <td>10000</td>
                            <td>
                                <img src="{{ asset('assets/images/delete.png') }}" alt="">
                                <img src="{{ asset('assets/images/edit.jpg') }}" alt="">
                            </td>

                        </tr>

                        <tr>
                            <td>220</td>
                            <td>24/10/2022</td>
                            <td>Développeur</td>
                            <td>400</td>
                            <td>10000</td>
                            <td>
                                <img src="{{ asset('assets/images/delete.png') }}" alt="">
                                <img src="{{ asset('assets/images/edit.jpg') }}" alt="">
                            </td>

                        </tr>
                        <tr>
                            <td>220</td>
                            <td>24/10/2022</td>
                            <td>Développeur</td>
                            <td>500</td>
                            <td>8000</td>
                            <td>
                                <img src="{{ asset('assets/images/delete.png') }}" alt="">
                                <img src="{{ asset('assets/images/edit.jpg') }}" alt="">
                            </td>

                        </tr>
                        <tr>
                            <td>220</td>
                            <td>24/10/2022</td>
                            <td>Développeur</td>
                            <td>600</td>
                            <td>11000</td>
                            <td>
                                <img src="{{ asset('assets/images/delete.png') }}" alt="">
                                <img src="{{ asset('assets/images/edit.jpg') }}" alt="">
                            </td>

                        </tr>
                        <tr>
                            <td>220</td>
                            <td>24/10/2022</td>
                            <td>Développeur</td>
                            <td>700</td>
                            <td>12000</td>
                            <td>
                                <img src="{{ asset('assets/images/delete.png') }}" alt="">
                                <img src="{{ asset('assets/images/edit.jpg') }}" alt="">
                            </td>

                        </tr>
                        <tr>
                            <td>220</td>
                            <td>24/10/2022</td>
                            <td>Développeur</td>
                            <td>800</td>
                            <td>13000</td>
                            <td>
                                <img src="{{ asset('assets/images/delete.png') }}" alt="">
                                <img src="{{ asset('assets/images/edit.jpg') }}" alt="">
                            </td>

                        </tr>
                        <tr>
                            <td>220</td>
                            <td>24/10/2022</td>
                            <td>Développeur</td>
                            <td>900</td>
                            <td>14000</td>
                            <td>
                                <img src="{{ asset('assets/images/delete.png') }}" alt="">
                                <img src="{{ asset('assets/images/edit.jpg') }}" alt="">
                            </td>

                        </tr>
                    </tbody>
                </table>
            </div>
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

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="{{ asset('assets/js/pagination_dash.js') }}"></script>
</body>

</html>