<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('assets/css/dashbord.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">

    <style>
        .pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 10px;
        }

        .pagination .page-btn {
            color: black;
            padding: 8px 16px;
            text-decoration: none;
            transition: background-color 0.3s;
            border: 1px solid #ddd;
            margin: 0 4px;
            cursor: pointer;
        }

        .pagination .page-btn.active {
            background-color: #009EE2;
            color: #ffffff;
            border: 1px solid #009EE2;
        }

        .pagination .page-btn:hover:not(.active) {
            background-color: #ddd;
        }
    </style>
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
                            <a href="" class="nav-link">
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
                            <a href="" class="nav-link">
                                Enregistrements de clients
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link projet">
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
                <a href="" class="none">Profil</a>
            </div>
            <div class="nav2">
                <a href="" class="none">Se deconnecter</a></h1>
            </div>
        </header>
        <main id="main">

            <div class="col-sm-12 d-flex justify-content-center titre">
                <h1 class="m-0">Bienvenue chez l’admin Jokkalante</h1>
            </div>
            <div class="corp">
                <div class="cards d-flex justify-content-center">

                    <div class="card-single ">
                        <h4>Projet</h4>
                        <h3>Ternimer</h3>
                        <h4>50</h4>
                    </div>
                    <div class="card-single">
                        <h4>Projet</h4>
                        <h3>Ouvert</h3>
                        <h4>50</h4>
                    </div>
                    <div class="card-single">
                        <h4>Projet</h4>
                        <h3>En cours</h3>
                        <h4>40</h4>
                    </div>
                </div>
                <div class="d-flex contenu justify-content-center">
                    <img src="{{ asset('assets/images/image 29.png') }}"width="280px" height="280px"
                        alt="Your Image">
                </div>
            </div>
            <div class="table-responsive">

                <table class="table table-bordered ">
                    <thead>
                        <tr>
                            <th>Numéro</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Adresse e-mail</th>
                            <th>Titre Projet</th>
                            <th>Etat Projet</th>
                        </tr>
                    </thead>
                    <tbody id="table-id">

                        <tr>
                            <td>1</td>
                            <td>Mbengue</td>
                            <td>Fatou</td>
                            <td>fatmbaye656@gmail.comm</td>
                            <td>Site e-commerce</td>
                            <td><img src="{{ asset('assets/images/image 37.png') }}"width="15px" height="15px"
                                    alt="Your Image"></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Faye</td>
                            <td>Mouhamed</td>
                            <td>faye@gmail.com</td>
                            <td>Gestion clinique</td>
                            <td>En cours</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Faye</td>
                            <td>Mouhamed</td>
                            <td>faye@gmail.com</td>
                            <td>Site e-commerce</td>
                            <td>En cours</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Faye</td>
                            <td>Mouhamed</td>
                            <td>faye@gmail.com</td>
                            <td>Site e-commerce</td>
                            <td>En cours</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Faye</td>
                            <td>Mouhamed</td>
                            <td>faye@gmail.com</td>
                            <td>Site e-commerce</td>
                            <td>En cours</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Faye</td>
                            <td>Mouhamed</td>
                            <td>faye@gmail.com</td>
                            <td>Site e-commerce</td>
                            <td>En cours</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Faye</td>
                            <td>Mouhamed</td>
                            <td>faye@gmail.com</td>
                            <td>Site e-commerce</td>
                            <td>En cours</td>
                        </tr>
                    </tbody>
                </table>
                <div id="pagination" class="pagination">
                    <button id="previous-btn" class="page-btn">Précédent</button>
                    <button id="next-btn" class="page-btn">Suivant</button>
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var projetLinks = document.querySelectorAll('.sidebar-menu .nav-item .nav-link.projet');

            projetLinks.forEach(function(link) {
                link.addEventListener('click', function(event) {
                    event.preventDefault();
                    var tableContainers = document.querySelectorAll('.table-responsive');
                    var corpElements = document.querySelectorAll('.corp');
                    var titreElements = document.querySelectorAll('.titre');
                    var mainElements = document.querySelectorAll('main');

                    tableContainers.forEach(function(tableContainer) {
                        tableContainer.style.display = 'block';
                    });

                    mainElements.forEach(function(mainElement) {
                        mainElement.style.margin = '80px 0 0 0';
                        mainElement.style.padding = '0px';
                    });

                    corpElements.forEach(function(corpElement) {
                        corpElement.style.display = 'none';
                    });
                    titreElements.forEach(function(titreElement) {
                        titreElement.style.margin = '100px 0 40px 0';
                    });
                });
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var tableRows = document.querySelectorAll('#table-id tr');
            var rowsPerPage = 3;
            var currentPage = 1;
            var totalPages = Math.ceil(tableRows.length / rowsPerPage);
            var pagination = document.getElementById('pagination');
            var previousBtn = document.getElementById('previous-btn');
            var nextBtn = document.getElementById('next-btn');

            function showPage(page) {
                var startIndex = (page - 1) * rowsPerPage;
                var endIndex = startIndex + rowsPerPage;

                for (var i = 0; i < tableRows.length; i++) {
                    if (i >= startIndex && i < endIndex) {
                        tableRows[i].style.display = 'table-row';
                    } else {
                        tableRows[i].style.display = 'none';
                    }
                }
            }

            function generatePaginationLinks() {
                pagination.innerHTML = '';

                previousBtn.addEventListener('click', function() {
                    if (currentPage > 1) {
                        currentPage--;
                        showPage(currentPage);
                        updatePaginationLinks();
                    }
                });

                nextBtn.addEventListener('click', function() {
                    if (currentPage < totalPages) {
                        currentPage++;
                        showPage(currentPage);
                        updatePaginationLinks();
                    }
                });

                var previousLink = document.createElement('button');
                previousLink.textContent = 'Précédent';
                previousLink.classList.add('page-btn');
                previousLink.addEventListener('click', function() {
                    if (currentPage > 1) {
                        currentPage--;
                        showPage(currentPage);
                        updatePaginationLinks();
                    }
                });
                pagination.appendChild(previousLink);

                for (var i = 1; i <= totalPages; i++) {
                    var link = document.createElement('button');
                    link.textContent = i;
                    link.classList.add('page-btn');

                    if (i === currentPage) {
                        link.classList.add('active');
                    }

                    link.addEventListener('click', function() {
                        currentPage = parseInt(this.textContent);
                        showPage(currentPage);
                        updatePaginationLinks();
                    });

                    pagination.appendChild(link);
                }

                var nextLink = document.createElement('button');
                nextLink.textContent = 'Suivant';
                nextLink.classList.add('page-btn');
                nextLink.addEventListener('click', function() {
                    if (currentPage < totalPages) {
                        currentPage++;
                        showPage(currentPage);
                        updatePaginationLinks();
                    }
                });
                pagination.appendChild(nextLink);
            }

            function updatePaginationLinks() {
                var links = pagination.querySelectorAll('.page-btn');

                links.forEach(function(link) {
                    link.classList.remove('active');

                    if (parseInt(link.textContent) === currentPage) {
                        link.classList.add('active');
                    }
                });
            }

            showPage(currentPage);
            generatePaginationLinks();

            function updatePaginationLinks() {
                var links = pagination.querySelectorAll('.page-btn');

                links.forEach(function(link) {
                    link.classList.remove('active');

                    if (parseInt(link.textContent) === currentPage) {
                        link.classList.add('active');
                    }
                });

                previousBtn.disabled = (currentPage === 1);
                nextBtn.disabled = (currentPage === totalPages);
            }

        });
    </script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
