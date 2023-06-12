<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@700&family=Ubuntu&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <title>Acceuil</title>
    <link rel="stylesheet" href="{{ asset('assets/css/header.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/accueil.css') }}">
</head>

<body>

    @include('navbar/header');

    <div class="container-fluid1  mt-n3 py-2">
        <div class="container  py-1 pb-5 mb-5">
            <div class="row mx-4 text-center">
                <div class="col-lg-12 col-md-6 mb-2 px-lg-5 contenu">
                    <h1 class="text-white mt-5 py-4 text-center w-100">
                        Trouvez des freelances <br>disponibles
                    </h1>
                    <a href="apropos" type="button" class="btn1 bouton p-3 mb-2"> JoKKolante </a>
                    <a type="button" class="btn1 btn-bouton p-3 mb-2">Recevoir des devis</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid ">
        <div class="container py-1 ">
            <div class="row m-4 mt-n8 boxAccueil bg-white">
                <h2 class="teste  py-4 text-center w-100">
                    <samp class="text-dark"> Notre Mission, </samp> Vous Accompagner
                </h2>
                <div class="col-lg-6 col-md-6 mb-2 px-lg-5">
                    <p class="text-dark text-justify textes"> JOKKOLANTE est une agence qui intervient dans le domaine
                        de la consultance, du digital, de l'ingénierie logicielle et de la formation certifiante en
                        informatique.
                        <br> Notre mission est de d’accompagner à la transformation digitale des PME PMI Sénégalaise et
                        étrangère, tout en prodiguant un service de qualité. Nous mettons nos clients au cœur du
                        digital.
                    </p>
                    <button class="btn2 mt-2" type="submit py-2">JoKKolante</button>
                </div>
                <div class="col-lg-6 col-md-6 mb-2 px-lg-5">
                    <div class="bg-white d-flex align-items-center justify-content-between">
                        <img class="" src="{{ asset('assets/images/bg1.png') }}" width="300px;" height="500px;"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid2 py-4 text-centerr">
        <div class="container  py-5">
            <h2 class="text-white">JOKKOLANTE</h2>
            <p class="text-white">pour accompagner votre croissance</p>
            <div class="row m-5 text-center mb-3 ml-4 mr-4">
                <div class="col-lg-4 col-md-6 mb-3">
                    <div class="cadreImage text-center ">
                        <img class="m-3" src="{{ asset('assets/images/gratuit.png') }}" alt="...">
                        <h5 class="box-title">Simple</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6  mb-3">
                    <div class="cadreImage text-center ">
                        <img class="m-3" src="{{ asset('assets/images/rapide.png') }}" alt="...">
                        <h5 class="box-title">rapide</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6  mb-3">
                    <div class="cadreImage text-center">
                        <img class="m-3" src="{{ asset('assets/images/simple.png') }}" alt="...">
                        <h5 class="box-title">gratuit</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6  mb-3">
                    <div class="cadreImage text-center ">
                        <img class="m-3" src="{{ asset('assets/images/branding (1).png') }}" alt="...">
                        <h5 class="box-title">Bénéfique</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6  mb-3">
                    <div class="cadreImage text-center">
                        <img class="m-3" src="{{ asset('assets/images/app-development (1).png') }}" alt="...">
                        <h5 class="box-title">Securité</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6  mb-3">
                    <div class="cadreImage text-center ">
                        <img class="m-3" src="{{ asset('assets/images/calendar (2).png') }}" alt="...">
                        <h5 class="box-title">Fiable</h5>
                    </div>
                </div>
            </div>

            <button type="button" class="bouton1 btn-white mt-5">En savoir plus</button>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

    <!-- JavaScript Bundle with Popper -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script> --}}

    @include('navbar/footer')
</body>

</html>
