<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prestataires</title>
    <link rel="stylesheet" href="{{ asset('assets/css/prestataires.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/header_dash_client.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dash_prestataires.css') }}">


    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@700&family=Ubuntu&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>

<body>

    @include('dashboard_client.navbar.header')

    @include('dashboard_client.navbar.profil')
    <div class="presta">
        <div class="container-fluid containers">
            <div class="row col-md-12">
                <div class="card col-md-6 d-flex justify-content-between">
                    <div class="card-body">
                        <p class="card-text">Des milliers de services <br> Pour tous vos besoins</p>
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <img src="http://127.0.0.1:8000/assets/images/partenaires.png" alt="">
                </div>
            </div>
        </div>
        <div class="container-fluid tarif">
            <ul>
                <li>
                    <div class="cercle"><img src="{{ asset('assets/images/qualifier.png') }}" alt="">
                    </div>
                    <p>Prestataires qualifies</p>
                </li>
                <li>
                    <div class="cercle">
                        <img src="{{ asset('assets/images/tarifs.png') }}" alt="">
                    </div>
                    <p>Tarifs abordables</p>
                </li>
                <li>

                    <div class="cercle">
                        <img src="{{ asset('assets/images/satisfactions.png') }}" alt="">
                    </div>
                    <p>Satisfactions assurées</p>
                </li>
                <li>
                    <div class="cercle"><img src="{{ asset('assets/images/assurances.png') }}" alt="">
                    </div>
                    <p>assurance rapide</p>
                </li>
            </ul>
        </div>
        <div class="container-fluid chiffre">
            <h2 class="card-text">Jokkalante en chiffre</h2>
            <hr style="height: 4px; line-height: 40px;">
            <p>Testez l’experience et faites nous confiance</p>
        </div>
        <div class="container-fluid tarif1">
            <ul>
                <li>
                    <div class="cercle"><img src="{{ asset('assets/images/80000.png') }}" alt="">
                    </div>
                    <p> 80000 <br>
                        Services rélalisés
                    </p>
                </li>
                <li>
                    <div class="cercle">
                        <img src="{{ asset('assets/images/10000.png') }}" alt="">
                    </div>
                    <p> 10000 <br>
                        Prestataires activés
                    </p>
                </li>
                <li>

                    <div class="cercle">
                        <img src="{{ asset('assets/images/40000.png') }}" alt="">
                    </div>
                    <p> 40000 <br>
                        Clients satisfaits
                    </p>
                </li>
            </ul>
        </div>
        <div class="container-fluid chiffre">
            <h2 class="card-text">Comment ça marche ?</h2>
            <hr style="height: 4px; line-height: 40px;">
        </div>
        <div class="container-fluid envoi">
            <ul>
                <div class="li" style="justify-content: center">
                    <img src="{{ asset('assets/images/demander.png') }}" alt="">
                    <p>Demander un service</p>
                </div>
                <div class="li" style="justify-content: center">
                    <img src="{{ asset('assets/images/payement.png') }}" alt="">
                    <p>Choisisez un prestataire</p>
                </div>
                <div class="li" style="justify-content: center">
                    <img src="{{ asset('assets/images/services.png') }}" alt="">
                    <p>Souriez c’est pret!</p>
                </div>
            </ul>
        </div>
        <div class="container-fluid clients">
            <div class="row col-md-12">
                <div class="card col-md-6 d-flex justify-content-between">
                    <div class="card-body">
                        <h2 class="card-text">Nous Rejoindres</h2>
                        <hr style="height: 4px; line-height: 30px;">
                        <p>Proposer vos talents à de nouvelles clients</p>

                        <div class="textes">Rejoindre la communauté de prestataires, développez votre activité et
                            augmentez
                            votre chiffres d’affaires par des services de qualité
                        </div>

                        <div class="presta" style="text-align: center">
                            <button>Devenir pretataire</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <img src="http://127.0.0.1:8000/assets/images/partenaires.png" alt="">
                </div>
            </div>
        </div>
        @include('navbar.footer')
    </div>

</body>


</html>
