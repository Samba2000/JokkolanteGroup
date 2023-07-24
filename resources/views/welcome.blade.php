@extends('base')
@section('head')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@700&family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200&display=swap" rel="stylesheet">
    <link href="{{ asset('assets/images/logo.ico') }}" rel="icon">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="{{ asset('assets/css/header.css') }} ">
    <title>Acceuil</title>
    <link rel="stylesheet" href="{{ asset('assets/css/accueil.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">
@endsection
@section('head')
    @include('navbar.header')
@endsection
@section('content')
    <div class="welcome">
        <div class="container-fluid1 py-5">
            <div class="container  py-5">
                <div class="row mx-4 text-center">
                    <div class="col-lg-12 col-md-6 mb-2 px-lg-5 contenu">
                        <h1 class="text-white mt-5 text-center">
                            Trouvez des freelances <br>disponibles
                        </h1>
                        <div class="boutons">
                            <a href="{{ route('apropos') }}" type="button" class="btn1 bouton p-3 mb-2"> JoKKolante </a>
                            <a type="button" class="btn1 btn-bouton p-3 mb-2">Recevoir des devis</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="container vb">
                <div class="row m-4 mt-n5 boxAccueil">
                    <h2 class="teste  py-4 text-center w-100" style="color:#009EE2;">
                        <samp class="text-dark"> Notre Mission, </samp> Vous Accompagner
                    </h2>
                    <button class="btn3 mt-2" type="submit">
                        <img class="imag" src="{{ asset('assets/images/tel.png') }}" alt="">
                        <div class="con">
                            <p>Contactez nous</p>
                            <a href="tel:(+221)781320105"> +221 78 132 01
                                05</a>

                        </div>
                    </button>

                    <div class="col-md-12">
                        <div class="col-lg-6 col-md-6 mb-2 px-lg-5">
                            <p class="text-dark text-justify textes"> JOKKOLANTE est une agence qui intervient dans le
                                domaine
                                de la consultance, du digital, de l'ingénierie logicielle et de la formation certifiante en
                                informatique.
                                <br> Notre mission est de d’accompagner à la transformation digitale des PME PMI Sénégalaise
                                et
                                étrangère, tout en prodiguant un service de qualité. Nous mettons nos clients au cœur du
                                digital.
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-6 mb-2 px-lg-5">
                            <div class="bg-white d-flex align-items-center justify-content-end">
                                <img class="" src="{{ asset('assets/images/bg1.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-12">
                            <button class="btn2 mt-2" type="submit py-2">Qui sommes nous ?</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid2 text-centerr">
            <div class="container">
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
        <div class="container-fluid py-5">
            <div class="container">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="cards-wrapper">
                                <div class="box text-center ">
                                    <div class="box-body">
                                        <img src="assets/images/shape.png" class="box-img-top" alt="...">

                                        <h5 class="box-title">Applications</h5>
                                        <p class="box-text">Développement de Logiciel.</p>
                                    </div>
                                </div>
                                <div class="box text-center ">
                                    <div class="box-body">
                                        <img src="assets/images/shap.png" alt="...">

                                        <h5 class="box-title">Site Web</h5>
                                        <p class="box-text">Conception d’API</p>
                                    </div>
                                </div>
                                <div class="box text-center ">
                                    <div class="box-body">
                                        <img src="assets/images/sha.png" class="box-img-top" alt="...">

                                        <h5 class="box-title">Branding / Infographie</h5>
                                        <p class="box-text">Design Logo .</p>
                                    </div>
                                </div>
                                <div class="box text-center ">
                                    <div class="box-body">
                                        <img src="assets/images/shape.png" class="box-img-top" alt="...">

                                        <h5 class="box-title">Applications</h5>
                                        <p class="box-text">Développement de Logiciel.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="cards-wrapper">
                                <div class="box text-center ">
                                    <div class="box-body">
                                        <img src="assets/images/shape.png" class="box-img-top" alt="...">

                                        <h5 class="box-title">Applications</h5>
                                        <p class="box-text">Développement de Logiciel.</p>
                                    </div>
                                </div>
                                <div class="box text-center ">
                                    <div class="box-body">
                                        <img src="assets/images/shap.png" alt="...">

                                        <h5 class="box-title">Site Web</h5>
                                        <p class="box-text">Conception d’API</p>
                                    </div>
                                </div>
                                <div class="box text-center ">
                                    <div class="box-body">
                                        <img src="assets/images/sha.png" class="box-img-top" alt="...">

                                        <h5 class="box-title">Branding / Infographie</h5>
                                        <p class="box-text">Design Logo .</p>
                                    </div>
                                </div>
                                <div class="box text-center ">
                                    <div class="box-body">
                                        <img src="assets/images/shape.png" class="box-img-top" alt="...">

                                        <h5 class="box-title">Applications</h5>
                                        <p class="box-text">Développement de Logiciel.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="cards-wrapper">
                                <div class="box text-center ">
                                    <div class="box-body">
                                        <img src="assets/images/shape.png" class="box-img-top" alt="...">

                                        <h5 class="box-title">Applications</h5>
                                        <p class="box-text">Développement de Logiciel.</p>
                                    </div>
                                </div>
                                <div class="box text-center ">
                                    <div class="box-body">
                                        <img src="assets/images/shap.png" alt="...">

                                        <h5 class="box-title">Site Web</h5>
                                        <p class="box-text">Conception d’API</p>
                                    </div>
                                </div>
                                <div class="box text-center ">
                                    <div class="box-body">
                                        <img src="assets/images/sha.png" class="box-img-top" alt="...">

                                        <h5 class="box-title">Branding / Infographie</h5>
                                        <p class="box-text">Design Logo .</p>
                                    </div>
                                </div>
                                <div class="box text-center ">
                                    <div class="box-body">
                                        <img src="assets/images/shape.png" class="box-img-top" alt="...">

                                        <h5 class="box-title">Applications</h5>
                                        <p class="box-text">Développement de Logiciel.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid ">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-4 col-md-6 mb-2 pt-3 px-lg-5 text-left block">
                        <h3 class="text-dark texte1">Trouvez un freelance</h3>
                        <p class="text-dark text-justify">Sur JoKKolante.com, postez votre annonce gratuitement et recevez
                            les devis de nombreux travailleurs indépendants. </p>
                        <a href="#" class="btn bnt1">Recevoir des devis</a>
                        <h3 class="text-dark mt-3  texte1">Vous êtes freelance ?</h3>
                        <p class="text-dark text-justify">Inscrivez-vous gratuitement sur JoKKolante.sn pour trouver de
                            nouvelles opportunités de vente de services. </p>
                        <a href="#" class="btn bnt2">S’inscrire</a>
                        <h3 class="text-dark mt-3  texte1">Vous êtes freelance ? </h3>
                        <p class="text-dark text-justify">Calculez votre salaire en portage salarial
                            Profitez de la liberté du freelance et bénéficiez des avantages du salarié grâce au portage
                            salarial.</p>
                        <a href="#" class="btn bnt3">Calculer
                            mon salaire</a>
                    </div>
                    <div class="col-lg-8 col-md-6 mb-2 pt-3 px-lg-7 text-left">
                        <h3 class="text-dark"><b>Les projets à la une </b></h3>
                        <div class="boxAccueil1 p-3 text-center">
                            <div class="image">

                                <img src="{{ asset('assets/images/Group661.png') }}" alt="">
                            </div>
                            <div class="contenu">
                                <h5 class="text-dark">Recherche Equipe Freelancer divers domaines à long-terme</h5>
                                <p class="text-dark"> Ouvert • 500.000f CFA à 1.000.0000f CFA • 35 offres • Client #438918
                                </p>
                                <p> Bonjour, Je souhaite constituer une équipe pour pouvoir répondre aux besoins de mes
                                    clients.<br>
                                    L'idée est d'avancer ensemble, seule je n'y arrive plus. </p>
                                <div class="a">
                                    <a href="#" class="btn">Optimisation SEO</a>
                                    <a href="#" class="btn">Optimisation SEO</a>
                                    <a href="#" class="btn">Optimisation SEO</a>
                                </div>
                            </div>

                        </div>
                        <div class="boxAccueil1  text-center" style="border: 1px dashed #009EE2;">
                            <div>
                                <h5 class="text-dark">Vous cherchez un freelance ? Déposez un projet gratuitement
                                </h5>
                                <p class="text-dark" style="font-size: 16px">Vous recevrez une quinzaine de devis en
                                    quelques
                                    minutes

                                </p>
                                <a href="#" class="btn btnn">S’inscrire</a>
                            </div>
                        </div>
                        <div class="boxAccueil1 p-3 text-center">
                            <div class="image">

                                <img src="{{ asset('assets/images/Group661.png') }}" alt="">
                            </div>
                            <div class="contenu">
                                <h5 class="text-dark">Recherche Equipe Freelancer divers domaines à long-terme</h5>
                                <p> Ouvert • 500.000f CFA à 1.000.0000f CFA • 35 offres • Client #438918</p>
                                <p> Bonjour, Je souhaite constituer une équipe pour pouvoir répondre aux besoins de mes
                                    clients.<br>
                                    L'idée est d'avancer ensemble, seule je n'y arrive plus. </p>
                                <div class="a">
                                    <a href="#" class="btn">Optimisation SEO</a>
                                    <a href="#" class="btn">Optimisation SEO</a>
                                    <a href="#" class="btn">Optimisation SEO</a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="container py-3 boxOval ">
                <div class="container-fluid  text-center w-100">
                    <h1 class=" text-dark ">Plus de 000 000 freelances disponibles </h1>
                    <p class=" text-dark">pour réaliser vos projets</p>
                    <a href="#" class="btn" style="">Recevoir des devis</a>
                    <p class=" text-dark">Rapide, simple et sans obligation</p>
                </div>
            </div>
        </div>
        <div class="container py-5 ">
            <div class=" container py-5 texte">
                <h1 class=" text-dark text-center ">De quel freelance avez-vous <br> besoin ?</h1>
                <p class=" text-dark text-center ">JoKKolante.com a des freelances dans<br> chaque domaine du web.
                    Consultez la<br> liste ci-dessous pour trouver les<br> freelances qui répondent à vos<br> besoins.
                </p>
            </div>
            <div class="container graphisme">
                <div class="row" style="justify-content:center;">
                    <div class="col-md-12">
                        <div class="col-md-4 mb-2">
                            <div class="rent-item mb-4">
                                <div class=" bg-white boxAccueil2 mb-3">
                                    <img src="{{ asset('assets/images/Rectangle.png') }}" alt="">
                                    <span class="text-dark teste">Tech</span>
                                    <hr>
                                    <div class=" text-center">
                                        <a href="">
                                            <h2 class="text-dark"> Architecte freelance</h2>
                                        </a>
                                        <a href="">
                                            <h2 class="text-dark">Chef de projet freelance</h2>
                                        </a>
                                        <a href="">
                                            <h2 class="text-dark">Concepteur freelance</h2>
                                        </a>
                                        <a href="">
                                            <h2 class="text-dark">Développeur freelance</h2>
                                        </a>
                                        <a href="">
                                            <h2 class="text-dark">Formateur freelance</h2>
                                        </a>
                                        <a href="">
                                            <h2 class="text-dark">Intégrateur freelance</h2>
                                        </a>
                                        <a href="">
                                            <h2 class="text-dark">Prestataire freelance</h2>
                                        </a>
                                        <a href="">
                                            <h2 class="text-dark">Scrum master freelance</h2>
                                        </a>
                                        <a href="">
                                            <h2 class="text-dark">Technicien freelance</h2>
                                        </a>
                                        <a href="">
                                            <h2 class="text-dark">Testeur freelance</h2>
                                        </a>
                                        <a href="">
                                            <h2 class="text-dark">Webmaster freelance</h2>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-2">
                            <div class="rent-item mb-4">
                                <div class=" bg-white boxAccueil2 mb-3">
                                    <img src="{{ asset('assets/images/Rectangle (1).png') }}" alt="">
                                    <span class="text-dark teste">Graphisme</span>
                                    <hr>
                                    <div class=" text-center">
                                        <a href="">
                                            <h2 class="text-dark">Animateur freelance</h2>
                                        </a>
                                        <a href="">
                                            <h2 class="text-dark">Dessinateur freelance</h2>
                                        </a>
                                        <a href="">
                                            <h2 class="text-dark">Graphiste freelance</h2>
                                        </a>
                                        <a href="">
                                            <h2 class="text-dark">Illustrateur freelance</h2>
                                        </a>
                                        <a href="">
                                            <h2 class="text-dark">Infographiste freelance</h2>
                                        </a>
                                        <a href="">
                                            <h2 class="text-dark">Maquettiste freelance</h2>
                                        </a>
                                        <a href="">
                                            <h2 class="text-dark">Photographe freelance</h2>
                                        </a>
                                        <a href="">
                                            <h2 class="text-dark">UI/UX Designer freelance</h2>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-2">
                            <div class="rent-item mb-4">
                                <div class=" bg-white boxAccueil2 mb-3">

                                    <img src="{{ asset('assets/images/Rectangle (1).png') }}" alt="">
                                    <span class="text-dark teste">Marketing</span>
                                    <hr>
                                    <div class=" text-center text-dark">
                                        <a href="">
                                            <h2 class="text-dark">Community manager freelance </h2>
                                        </a>
                                        <a href="">
                                            <h2 class="text-dark">Consultant freelance</h2>
                                        </a>
                                        <a href="">
                                            <h2 class="text-dark">Content manager freelance</h2>
                                        </a>
                                        <a href="">
                                            <h2 class="text-dark">Correcteur freelance</h2>
                                        </a>
                                        <a href="">
                                            <h2 class="text-dark">Formateur freelance</h2>
                                        </a>
                                        <a href="">
                                            <h2 class="text-dark">Growth hacker freelance</h2>
                                        </a>
                                        <a href="">
                                            <h2 class="text-dark">Marketeur freelance</h2>
                                        </a>
                                        <a href="">
                                            <h2 class="text-dark">Rédacteur web freelance</h2>
                                        </a>
                                        <a href="">
                                            <h2 class="text-dark">Social media manager freelance</h2>
                                        </a>
                                        <a href="">
                                            <h2 class="text-dark">Traffic manager freelance</h2>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-4 mb-2">
                            <div class="rent-item mb-4">
                                <div class=" bg-white boxAccueil2 mb-3">

                                    <img src="{{ asset('assets/images/Rectangle (1).png') }}" alt="">
                                    <span class="text-dark teste">Videos</span>
                                    <hr>
                                    <div class=" text-center text-dark">
                                        <a href="">
                                            <h2 class="text-dark">Animateur freelance</h2>
                                        </a>
                                        <a href="">
                                            <h2 class="text-dark">Game designer freelance</h2>
                                        </a>
                                        <a href="">
                                            <h2 class="text-dark">Monteur vidéo freelance</h2>
                                        </a>
                                        <a href="">
                                            <h2 class="text-dark">Motion designer freelance</h2>
                                        </a>
                                        <a href="">
                                            <h2 class="text-dark">Sound designer freelance</h2>
                                        </a>
                                        <a href="">
                                            <h2 class="text-dark">Vidéaste freelance</h2>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-2">
                            <div class="rent-item mb-4">
                                <div class=" bg-white boxAccueil2 mb-3">

                                    <img src="{{ asset('assets/images/Rectangle (1).png') }}" alt="">
                                    <span class="text-dark teste">Service</span>
                                    <hr>
                                    <div class=" text-center text-dark">
                                        <a href="">
                                            <h2 class="text-dark">Assistant freelance</h2>
                                        </a>
                                        <a href="">
                                            <h2 class="text-dark">Commercial freelance</h2>
                                        </a>
                                        <a href="">
                                            <h2 class="text-dark">Comptable freelance</h2>
                                        </a>
                                        <a href="">
                                            <h2 class="text-dark">Formateur freelance</h2>
                                        </a>
                                        <a href="">
                                            <h2 class="text-dark">Office manager freelance</h2>
                                        </a>
                                        <a href="">
                                            <h2 class="text-dark">Prestataire freelance</h2>
                                        </a>
                                        <a href="">
                                            <h2 class="text-dark">Secrétaire freelance</h2>
                                        </a>
                                        <a href="">
                                            <h2 class="text-dark">Téléprospecteur freelance</h2>
                                        </a>
                                        <a href="">
                                            <h2 class="text-dark">Traducteur freelance</h2>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-2">
                            <div class="rent-item mb-4">
                                <div class=" bg-white boxAccueil2 mb-3">

                                    <img src="{{ asset('assets/images/Rectangle (1).png') }}" alt="">
                                    <span class="text-dark teste">Reseau</span>
                                    <hr>
                                    <div class=" text-center text-dark">
                                        <a href="">
                                            <h2 class="text-dark">Administrateur freelance</h2>
                                        </a>
                                        <a href="">
                                            <h2 class="text-dark">Consultant freelance</h2>
                                        </a>
                                        <a href="">
                                            <h2 class="text-dark">Formateur freelance</h2>
                                        </a>
                                        <a href="">
                                            <h2 class="text-dark">Prestataire freelance</h2>
                                        </a>
                                        <a href="">
                                            <h2 class="text-dark">Sysadmin freelance</h2>
                                        </a>
                                        <a href="">
                                            <h2 class="text-dark">Technicien freelance</h2>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">

                        <div class="col-md-4 mb-2">
                        </div>

                        <div class="col-md-4 mb-2">
                        </div>
                        <div class="col-md-4 mb-2">
                            <div class="rent-item mb-5">
                                <div class=" bg-white boxAccueil2 mb-3">

                                    <img src="{{ asset('assets/images/Rectangle (1).png') }}" alt="">
                                    <span class="text-dark teste">Data</span>
                                    <hr>
                                    <div class=" text-center text-dark">
                                        <a href="">
                                            <h2 class="text-dark">Administrateur freelance</h2>
                                        </a>
                                        <a href="">
                                            <h2 class="text-dark">Data analyst freelance</h2>
                                        </a>
                                        <a href="">
                                            <h2 class="text-dark">Data engineer freelance</h2>
                                        </a>
                                        <a href="">
                                            <h2 class="text-dark">Data scientist freelance</h2>
                                        </a>
                                        <a href="">
                                            <h2 class="text-dark">Développeur freelance</h2>
                                        </a>
                                        <a href="">
                                            <h2 class="text-dark">Technicien freelance</h2>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid py-5 text-center texte ">

            <h1 class="  text-dark">De quel freelance avez-vous
                besoin ?
            </h1>
            <p class=" text-center text-dark">Nos formations certifiantes à avec notre partenaire <span>DJOLOOF DIGITAL
                    ACADEMY</span>
                sont diverses et<br> flexibles. Nous vous offrons des formations autonomes
                et efficaces vous permettant d'intégrer avec<br> aisance le monde
                de l'entrepreneuriat ou de l’entreprise. Grâce à nos formateurs
                qualifiés et <br>expérimentés, vous pousserez vos limites bien au-delà
                de ce que vous croyiez.

            </p>
            <a href="apropos" class="btn1 btn-bouton p-3" style="margin-top: 50px">Recevoir des devis</a>
            <div class=" text-right">
                <img src="{{ asset('assets/images/im.png') }}" width="300px" height="300px" alt="">
            </div>
        </div>
        <section id="count" class="count">
            <div class="container-fluid py-5">
                <div class="row">


                    <h1 class=" text-center"><samp class="text-dark">Nos</samp> partenaires</h1>
                    <div id="demo" class="carousel slide" data-bs-ride="carousel">

                        <div class="et_pb_text_inner" style="text-align: center;margin-top: 20px;"
                            data-aos="fade-down-right" data-aos-delay="100">

                            <div class="row  mb-3 mr-2" style="justify-content: end;">
                                <div class="col-lg-2 col-md-6 mb-2 pt-3 px-lg-5 ">

                                </div>
                            </div>

                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="cards-wrapper">
                                        <div class="box2 text-center">
                                            <img src="assets/images/logo-free.jpg" alt=""
                                                style="box-shadow: 0 1px 0 0 #EB1566; border: 1px solid #EB1566;">
                                        </div>

                                        <div class="box2 text-center">
                                            <img src="assets/images/logo-expresso.png" alt=""
                                                style="box-shadow: 0 1px 0 0 #22427C; border: 1px solid #22427C;">
                                        </div>

                                        <div class="box2 text-center ">
                                            <img src="assets/images/logo-pro.jpg" alt=""
                                                style="box-shadow: 0 1px 0 0 #EB1566; border: 1px solid #EB1566;">
                                        </div>

                                        <div class="box2 text-center ">
                                            <img src="assets/images/logo-atos.jpg" alt=""
                                                style="box-shadow: 0 1px 0 0 #007FFF; border: 1px solid #007FFF;">
                                        </div>
                                    </div>

                                </div>

                                <div class="carousel-item">
                                    <div class="cards-wrapper">
                                        <div class="box2 text-center">
                                            <img src="assets/images/logo-free.jpg" alt=""
                                                style="box-shadow: 0 1px 0 0 #EB1566; border: 1px solid #EB1566;">
                                        </div>

                                        <div class="box2 text-center">
                                            <img src="assets/images/logo-expresso.png" alt=""
                                                style="box-shadow: 0 1px 0 0 #22427C; border: 1px solid #22427C;">
                                        </div>

                                        <div class="box2 text-center ">
                                            <img src="assets/images/logo-pro.jpg" alt=""
                                                style="box-shadow: 0 1px 0 0 #EB1566; border: 1px solid #EB1566;">
                                        </div>

                                        <div class="box2 text-center ">
                                            <img src="assets/images/logo-atos.jpg" alt=""
                                                style="box-shadow: 0 1px 0 0 #007FFF; border: 1px solid #007FFF;">
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
        </section>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

    </div>
@endsection
@section('footer')
    @include('navbar.footer')
@endsection
