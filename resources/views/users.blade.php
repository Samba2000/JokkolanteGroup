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

    <nav class="navbar default-layout-navbar col-lg-12 col-md-12 col-12 p-0 fixed-top d-flex flex-row">
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
    <div class="container-fluid col-lg-12 col page-body-wrapper">
        <div class="main-panel">
            <div class="content-wrapper d-flex justify-content-center">
                <div class="row">
                    <div class="col-12 grid-margin stretch-card d-flex justify-content-center">
                        <div class="card">
                            <div class="card-body" id="card-body">
                                <h4 class="card-title">Créer un compte gratuitement</h4>
                                <p class="card-description">
                                    Vous êtes : <span> (obligatoire)</span>
                                </p>

                                <div class="select">
                                    <div class="select-button" placeholder="Vous êtes : (obligatoire)...">
                                        <span>Vous êtes : (obligatoire)...</span>
                                        <span class="select-icon" id="select-icon"></span>
                                    </div>

                                    {{-- <span class="select-icon"></span> --}}
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
                                    <button id="suivant" onclick="afficherFormulaire()">
                                        Suivant

                                    </button>
                                </div>
                                <div id="formulaire">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- content-wrapper ends -->
        </div>

        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <div class="nav" id="sidebar-nav">
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
    </div>



    <script>
        // JavaScript code
        const selectButton = document.querySelector('.select-button');
        const selectOptions = document.querySelector('.select-options');
        const selectIcon = document.querySelector('.select-icon');

        selectButton.addEventListener('click', () => {
            selectButton.classList.toggle('active');
            selectOptions.classList.toggle('active');
            selectIcon.classList.toggle('active');

        });

        selectOptions.addEventListener('click', (e) => {
            if (e.target.classList.contains('select-option')) {
                selectButton.textContent = e.target.textContent;
                selectButton.classList.remove('active');
                selectOptions.classList.remove('active');
            }
        });
    </script>

    <script>
        function afficherFormulaire() {
            var selectOption = document.querySelector('.select-button').textContent;
            var suivantButton = document.getElementById('suivant');
            var sidbar = document.getElementById('sidebar');
            var sidbarNav = document.getElementById('sidebar-nav');
            var cardBody = document.getElementById('card-body');
            var baseUrl = "{{ asset('') }}";


            if (selectOption.includes('Je suis client')) {
                // Afficher le formulaire du client
                suivantButton.style.display = 'none';
                cardBody.style.backgroundImage = 'none';
                sidbar.style.height = '650px';
                sidbarNav.style.backgroundImage = 'url(' + baseUrl + 'assets/images/3.png)';
                var formulaire = document.getElementById('formulaire');
                formulaire.innerHTML = `
                <div class="forme">
                    <h3>Créez un compte rapidement avec l’un de ces services :</h3>
                    <div class="reseau">
                        <img src="{{ asset('assets/images/Vector.png') }}" alt="">
                        <img src="{{ asset('assets/images/Vector1.png') }}" alt="">
                        <img src="{{ asset('assets/images/Group 119.png') }}" alt="">
                        <img src="{{ asset('assets/images/Group 118.png') }}" alt="">
                    </div>
                    <hr>
                    <h4>Créez un compte avec votre adresse email :</h4>
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Votre adresse email <span>(obligatoire)</span></label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Choisissez votre pseudo <span>(obligatoire)</span></label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">Votre pseudo sera affiché sur le site et utilisé pour vous identifier. En minuscule, sans espace, que des lettres, chiffres et caractères "-" et "_".</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Choisissez votre mot de passe <span>(obligatoire)</span></label>
                            <input type="password" class="form-control" id="exampleInputPassword1"><i class="icon"><img src="{{ asset('assets/images/arcticons_passwordkeeper.png') }}" alt=""></i>
                            <div id="emailHelp" class="form-text">La création d'un compte implique que vous avez lu et accepté <span class="span1">les termes et conditionsd'utilisation.</span></div>
                        </div>
                            <button type="submit">S’incrire</button>
                    </form>
                </div>
            `;
            } else if (selectOption.includes('Je suis prestataire')) {
                // Afficher le formulaire du prestataire
                suivantButton.style.display = 'none';
                var formulaire = document.getElementById('formulaire');
                formulaire.innerHTML = `
              <h4>Formulaire du prestataire</h4>
              <form>
                <div>
                  <label for="providerName">Nom du prestataire :</label>
                  <input type="text" id="providerName" name="providerName" required>
                </div>

                <div>
                  <label for="providerEmail">Email du prestataire :</label>
                  <input type="email" id="providerEmail" name="providerEmail" required>
                </div>

                <!-- Add more fields for the service provider form if needed -->

                <button type="submit">Submit</button>
              </form>
            `;
            }



        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('assets/js/users.js') }}"></script>
</body>

</html>
