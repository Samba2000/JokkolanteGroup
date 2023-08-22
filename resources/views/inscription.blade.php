<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inscription</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <link rel="icon" href="{{ asset('assets/images/logo.ico') }}" type="image/x-icon" />
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/inscription.css') }}">
    <!-- End layout styles -->
</head>


<body>

    <nav class="navbar default-layout-navbar col-lg-12 col-md-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex justify-content-center">
            <a class="navbar-brand brand-logo d-flex justify-content-center" href="index.html">
                <img src="{{ asset('assets/images/Jokkolanté KK 1.png') }}" alt="logo" class="logo-light" />
            </a>
            {{-- <a class="navbar-brand brand-logo-mini" href="index.html"><img
                    src="{{ asset('assets/images/Jokkolanté KK 1.png') }}" alt="logo" /></a> --}}
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{ route('inscription') }}" class="nav-link ">
                        <button class="bnt active">Inscription</button>
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

                                <div class="select" id="select">
                                    <div class="select-button" id="role" name="role"
                                        value="{{ old('role') }}">
                                        <span>Vous êtes : (obligatoire)...</span>
                                        <span class="select-icon"></span>
                                    </div>

                                    {{-- <span class="select-icon"></span> --}}
                                    <ul class="select-options">
                                        <li class="select-option" value="client" data-value="client"
                                            data-form="form-client">
                                            Je suis client : j'ai un projet à faire réaliser

                                        </li>

                                        <li class="select-option" value="prestataire" data-value="prestataire"
                                            data-form="form-prestataire">
                                            Je suis prestataire : je cherche des projets à réaliser

                                        </li>
                                    </ul>
                                </div>

                                <div class="d-flex justify-content-center">
                                    <button id="suivant" onclick="afficherFormulaire(event)">
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
            <div class="navb" id="navb">
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
            </div>
        </nav>
    </div>



    <script>
        // Add the event listener for the option selection
        const selectButton = document.querySelector('.select-button');
        const selectOptions = document.querySelector('.select-options');
        const selectIcon = selectButton.querySelector('.select-icon');

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
                selectIcon.classList.remove('active');
            }
        });
        // Add the event listener for the "Suivant" button click
        const suivantButton = document.getElementById('suivant');
        suivantButton.addEventListener('click', (event) => {
            afficherFormulaire(event);
        });
    </script>




    <script>
        var sidbarNav = document.getElementById('sidebar-nav');
        sidbarNav.style.display = 'none';

        function afficherFormulaire(event) {
            event.preventDefault();
            var selectOption = document.querySelector('.select-button').textContent; // Retrieve the selected option

            const suivantButton = document.getElementById('suivant');
            // Remove the "Suivant" button's event listener
            suivantButton.removeEventListener('click', afficherFormulaire);

            // The rest of the function remains unchanged...

            // Add event listeners to each option
            const options = document.querySelectorAll('.select-option');
            options.forEach((option) => {
                option.addEventListener('click', (e) => {
                    selectButton.textContent = e.target.textContent;
                    selectButton.classList.remove('active');
                    selectOptions.classList.remove('active');
                    selectIcon.classList.remove('active');
                    afficherFormulaire(e);
                });
            });




            var navb = document.getElementById('navb');
            var sidbar = document.getElementById('sidebar');
            var cardBody = document.getElementById('card-body');
            sidbarNav.style.display = 'flex';
            navb.style.display = 'flex';
            var formulaire = document.getElementById('formulaire');
            var baseUrl = "{{ asset('') }}";
            // Obtenir l'option sélectionnée avec l'attribut data-value


            if (selectOption.includes('Je suis client')) {
                // Afficher le formulaire du client
                suivantButton.style.display = 'none';
                // cardBody.style.backgroundImage = 'none';
                // sidbar.style.height = '650px';
                navb.style.backgroundImage = 'url(' + baseUrl + 'assets/images/3.png)';

                var formulaire = document.getElementById('formulaire');
                formulaire.innerHTML = `
                <div class="forme" id="form-client">
                    <h3>Créez un compte rapidement avec l’un de ces services :</h3>
                    <div class="reseau">
                        <img src="{{ asset('assets/images/Vector.png') }}" alt="">
                        <img src="{{ asset('assets/images/Vector1.png') }}" alt="">
                        <img src="{{ asset('assets/images/Group 119.png') }}" alt="">
                        <img src="{{ asset('assets/images/Group 118.png') }}" alt="">
                    </div>
                    <hr>
                    <h4>Créez un compte avec votre adresse email :</h4>
                    <form method="POST" action="{{ route('inscription.register') }}" id="inscription-form" onsubmit="return validerFormulaire()">
                        @csrf
                        <input type="hidden" name="role" value="client">

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Votre adresse email <span>(obligatoire)</span></label>
                            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" required value="{{ old('email') }}">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPseudo" class="form-label">Choisissez votre pseudo <span>(obligatoire)</span></label>
                            <input type="pseudo" class="form-control" name="pseudo" id="exampleInputPseudo1" aria-describedby="emailHelp" required>
                            @error('pseudo')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <div id="emailHelp" class="form-text">Votre pseudo sera affiché sur le site et utilisé pour vous identifier. En minuscule, sans espace, que des lettres, chiffres et caractères "-" et "_".</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Choisissez votre mot de passe <span>(obligatoire)</span></label>
                            <input type="password" class="form-control" name="password" id="exampleInputPassword1" required><i class="icon"></i>

                            <div id="emailHelp" class="form-text">La création d'un compte implique que vous avez lu et accepté <span class="span1">les termes et conditionsd'utilisation.</span></div>
                        </div>
                            <button type="submit">S’inscrire</button>
                    </form>
                </div>
            `;


            } else if (selectOption.includes('Je suis prestataire')) {
                // Afficher le formulaire du prestataire
                suivantButton.style.display = 'none';
                // cardBody.style.backgroundImage = 'none';
                // sidbar.style.height = '650px';
                navb.style.backgroundImage = 'url(' + baseUrl + 'assets/images/pexels-fauxels-3184423 1.png)';

                var formulaire = document.getElementById('formulaire');
                formulaire.innerHTML = `
                <div class="forme" id="form-prestataire">
                    <h3>Créez un compte rapidement avec l’un de ces services :</h3>
                    <div class="reseau">
                        <img src="{{ asset('assets/images/Vector.png') }}" alt="">
                        <img src="{{ asset('assets/images/Vector1.png') }}" alt="">
                        <img src="{{ asset('assets/images/Group 119.png') }}" alt="">
                        <img src="{{ asset('assets/images/Group 118.png') }}" alt="">
                    </div>
                    <hr>
                    <h4>Créez un compte avec votre adresse emaill :</h4>
                    <form method="POST" action="{{ route('inscription.register') }}" id="inscription-form" onsubmit="return validerFormulaire()">
                        @csrf
                        <input type="hidden" name="role" value="prestataire">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Votre adresse email <span>(obligatoire)</span></label>
                            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            @error('email')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPseudo1" class="form-label">Choisissez votre pseudo <span>(obligatoire)</span></label>
                            <input type="pseudo" class="form-control" name="pseudo" id="exampleInputPseudo1" aria-describedby="pseudoHelp" required>
                            @error('pseudo')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <div id="pseudoHelp" class="form-text">Votre pseudo sera affiché sur le site et utilisé pour vous identifier. En minuscule, sans espace, que des lettres, chiffres et caractères "-" et "_".</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Choisissez votre mot de passe <span>(obligatoire)</span></label>
                            <input type="password" class="form-control" name="password" id="exampleInputPassword1"><i class="icon" required></i>
                            @error('password')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <div id="passwordHelp" class="form-text">La création d'un compte implique que vous avez lu et accepté <span class="span1">les termes et conditions d'utilisation.</span></div>
                        </div>
                            <button type="submit">S’inscrire</button>
                    </form>
                </div>
            `;

            }




            // Ajoutez un gestionnaire d'événement à la soumission du formulaire
            const inscriptionForm = document.getElementById('inscription-form');
            inscriptionForm.addEventListener('submit', function(event) {
                event.preventDefault(); // Empêcher la soumission par défaut du formulaire
                const formData = new FormData(inscriptionForm);
                fetch('{{ route('inscription.register') }}', {
                        method: 'POST',
                        body: formData
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            // Si l'inscription réussit, redirigez l'utilisateur vers la page de connexion ou affichez un message de succès
                            window.location.href = '{{ route('login.submit') }}';
                        } else {
                            // Si l'inscription échoue, affichez les erreurs dans le formulaire
                            const errors = data.errors;

                            for (const field in errors) {
                                if (errors.hasOwnProperty(field)) {
                                    const inputField = document.querySelector(`[name="${field}"]`);
                                    const errorSpan = document.createElement('span');
                                    errorSpan.classList.add('text-danger');
                                    errorSpan.textContent = errors[field][0];

                                    const parentDiv = inputField.parentElement;
                                    parentDiv.appendChild(errorSpan);
                                }
                            }
                        }
                    })
                    .catch(error => {
                        console.error('Erreur lors de la soumission du formulaire:', error);
                    });
            });
            // Sélectionnez tous les champs de saisie
            const inputFields = document.querySelectorAll('.form-control');

            // Ajoutez un gestionnaire d'événements pour chaque champ de saisie
            inputFields.forEach((inputField) => {
                inputField.addEventListener('input', () => {
                    // Supprimez le message d'erreur associé au champ de saisie
                    const errorSpan = inputField.parentElement.querySelector('.text-danger');
                    if (errorSpan) {
                        errorSpan.remove();
                    }
                });
            });


        }


        //...
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('assets/js/inscription.js') }}"></script>
</body>

</html>
