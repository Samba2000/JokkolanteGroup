<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/users.css') }}">
    <!-- End layout styles -->
</head>

<body>
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex justify-content-center">
            <a class="navbar-brand brand-logo" href="index.html">
                <img src="{{ asset('assets/images/Jokkolanté KK 1.png') }}" alt="logo" class="logo-light" />
            </a>
            <a class="navbar-brand brand-logo-mini" href="index.html"><img
                    src="{{ asset('assets/images/Jokkolanté KK 1.png') }}" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <button class="bnt">Inscription</button>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <button class="bnt">Profil</button>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <button class="bnt">Coordonnées</button>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <button class="bnt">Mon compte</button>
                    </a>
                </li>
            </ul>
        </div>
        <button
            class="navbar-toggler navbar-toggler-right d-lg-none align-self-center justify-content-md-center justify-content-sm-center"
            type="button" data-toggle="offcanvas">
            <img src="{{ asset('assets/images/Group 26.png') }}" alt="" />
        </button>
    </nav>

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-12 grid-margin stretch-card d-flex justify-content-center">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Créer un compte gratuitement</h4>
                                <p class="card-description">
                                    Vous êtes : <span> (obligatoire)</span>
                                </p>

                                <div class="select">
                                    <div class="select-button">
                                        <span>Vous êtes : (obligatoire)...</span>
                                        <span class="select-icon"></span>
                                    </div>
                                    <ul class="select-options">
                                        <li class="select-option">
                                            Je suis client : j'ai un projet à faire réaliser
                                        </li>
                                        <li class="select-option">
                                            Je suis prestataire : je cherche des projets à réaliser
                                        </li>
                                    </ul>
                                </div>

                                <div class="d-flex justify-content-center">
                                    <button>
                                        <a href="">Suivant</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <div class="nav">
                <h1>Pouquoi m'inscrire ?</h1>
                <ul>
                    <li>
                        <img src="{{ asset('assets/images/Group 403.png') }}" alt="" />Plus de 00 000 de
                        prestatires
                    </li>
                    <li><img src="{{ asset('assets/images/Group 403.png') }}" alt="" />Plus de 00 000 clients
                    </li>
                    <li class="af">
                        <img src="{{ asset('assets/images/Group 403.png') }}" alt="" />1ère communauté de
                        freelance en
                        Afrique
                    </li>
                </ul>
                <h1>Comment ça marche ?</h1>
                <ul class="liste">
                    <li><span>1</span> Le client dépose un projet</li>
                    <li><span>2</span> Les freelances proposent des devis</li>
                    <li><span>3</span> Ils échangent sur la messagerie privée</li>
                    <li><span>4</span> Le client choisit un prestataire</li>
                </ul>
            </div>
        </nav>
        <!-- partial -->
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->

        <!-- partial -->

        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->

    <!-- plugins:js -->
    <script>
        // JavaScript code
        const selectButton = document.querySelector(".select-button");
        const selectOptions = document.querySelector(".select-options");

        selectButton.addEventListener("click", () => {
            selectButton.classList.toggle("active");
            selectOptions.classList.toggle("active");
        });

        selectOptions.addEventListener("click", (e) => {
            if (e.target.classList.contains("select-option")) {
                selectButton.textContent = e.target.textContent;
                selectButton.classList.remove("active");
                selectOptions.classList.remove("active");
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets/js/users.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->

    <!-- End plugin js for this page -->
    <!-- inject:js -->

    <script src="{{ asset('assets/js/vendor.bundle.base.js') }}"></script>

    <!-- endinject -->
    <!-- Custom js for this page -->

    <!-- End custom js for this page -->
</body>

</html>
