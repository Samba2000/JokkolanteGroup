@extends('dashboard_client.base')
@section('head')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('assets/images/logo.ico') }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('assets/css/header_dash_client.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/css/dash_client.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/apropos.css') }} "> --}}

    <link href='https://fonts.googleapis.com/css?family=Manrope' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@700&family=Ubuntu&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <title>Profil Client</title>
@endsection
@section('head')
    @include('dashboard_client.navbar.header')
@endsection
@section('content')
    <div class="dash">
        <div class="container-fluid infos">
            <h4>#mBedello Camara DANSOKHO</h4>
            <div class="rectangle-profil">
                <div class="rectanggle-bleu">
                    <img src="{{ asset('assets/images/profil-dash.png') }}" alt="">
                </div>
            </div>
        </div>
        <div class="container-fluid infos-profil">
            <h1>Vous êtes sur le profil de Camara DANSOKHO</h1>
            <div class="container">
                <div class="row">
                    <div class="accordion accordion-redness" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Info
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Hello👋 <br>
                                    j'espère que tu vas bien <br>
                                    LinkedIn m'incite à te parler un peu de comment je suis, ce que je fais et comment je
                                    <br>
                                    vois l'avenir. <br>
                                    📌Motivée et ambitieuse, je suis une passionnée du digital, de l'informatique en <br>
                                    particulier, par tout ce qui est innovation et création💡🚀. <br>
                                    📌Je suis développeuse d'application web et logiciel et diplomée de l'Institut National
                                    <br>
                                    des Technologies de l'Information (NIIT) en licence professionnelle Génie Logiciel. <br>
                                    📌Grâce à ma formation en génie logiciel, j’ai développé de sérieuses connaissances en
                                    <br>
                                    programmation d'applications, de la modélisation avec UML (Langage de Modélisation <br>
                                    Unifié) 📈 et l'utilisation de différentes logiciels de codage et en matière de <br>
                                    graphisme ou de mise en page🧑‍💻; qui alliées à mes qualités de jeune informaticienne,
                                    <br>
                                    de ma créativité et de ma détermination m’ont conforté dans ma volonté d’intégrer une
                                    <br>
                                    entreprise dynamique, pleine d’avenir et d’ambition🚀. <br>
                                    <br>
                                    Trés bonnes compétences en : <br>
                                    <br>
                                    - Gestion de projets informatiques <br>
                                    - Développement front-end <br>
                                    - Développement back-end <br>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    Statistiques
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Hello👋 <br>
                                    j'espère que tu vas bien <br>
                                    LinkedIn m'incite à te parler un peu de comment je suis, ce que je fais et comment je
                                    <br>
                                    vois l'avenir. <br>
                                    📌Motivée et ambitieuse, je suis une passionnée du digital, de l'informatique en <br>
                                    particulier, par tout ce qui est innovation et création💡🚀. <br>
                                    📌Je suis développeuse d'application web et logiciel et diplomée de l'Institut National
                                    <br>
                                    des Technologies de l'Information (NIIT) en licence professionnelle Génie Logiciel. <br>
                                    📌Grâce à ma formation en génie logiciel, j’ai développé de sérieuses connaissances en
                                    <br>
                                    programmation d'applications, de la modélisation avec UML (Langage de Modélisation <br>
                                    Unifié) 📈 et l'utilisation de différentes logiciels de codage et en matière de <br>
                                    graphisme ou de mise en page🧑‍💻; qui alliées à mes qualités de jeune informaticienne,
                                    <br>
                                    de ma créativité et de ma détermination m’ont conforté dans ma volonté d’intégrer une
                                    <br>
                                    entreprise dynamique, pleine d’avenir et d’ambition🚀. <br>
                                    <br>
                                    Trés bonnes compétences en : <br>
                                    <br>
                                    - Gestion de projets informatiques <br>
                                    - Développement front-end <br>
                                    - Développement back-end <br>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Activité
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Hello👋 <br>
                                    j'espère que tu vas bien <br>
                                    LinkedIn m'incite à te parler un peu de comment je suis, ce que je fais et comment je
                                    <br>
                                    vois l'avenir. <br>
                                    📌Motivée et ambitieuse, je suis une passionnée du digital, de l'informatique en <br>
                                    particulier, par tout ce qui est innovation et création💡🚀. <br>
                                    📌Je suis développeuse d'application web et logiciel et diplomée de l'Institut National
                                    <br>
                                    des Technologies de l'Information (NIIT) en licence professionnelle Génie Logiciel. <br>
                                    📌Grâce à ma formation en génie logiciel, j’ai développé de sérieuses connaissances en
                                    <br>
                                    programmation d'applications, de la modélisation avec UML (Langage de Modélisation <br>
                                    Unifié) 📈 et l'utilisation de différentes logiciels de codage et en matière de <br>
                                    graphisme ou de mise en page🧑‍💻; qui alliées à mes qualités de jeune informaticienne,
                                    <br>
                                    de ma créativité et de ma détermination m’ont conforté dans ma volonté d’intégrer une
                                    <br>
                                    entreprise dynamique, pleine d’avenir et d’ambition🚀. <br>
                                    <br>
                                    Trés bonnes compétences en : <br>
                                    <br>
                                    - Gestion de projets informatiques <br>
                                    - Développement front-end <br>
                                    - Développement back-end <br>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingfour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapsefour" aria-expanded="false"
                                    aria-controls="flush-collapsefour">
                                    Expérience
                                </button>
                            </h2>
                            <div id="flush-collapsefour" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Hello👋 <br>
                                    j'espère que tu vas bien <br>
                                    LinkedIn m'incite à te parler un peu de comment je suis, ce que je fais et comment je
                                    <br>
                                    vois l'avenir. <br>
                                    📌Motivée et ambitieuse, je suis une passionnée du digital, de l'informatique en <br>
                                    particulier, par tout ce qui est innovation et création💡🚀. <br>
                                    📌Je suis développeuse d'application web et logiciel et diplomée de l'Institut National
                                    <br>
                                    des Technologies de l'Information (NIIT) en licence professionnelle Génie Logiciel. <br>
                                    📌Grâce à ma formation en génie logiciel, j’ai développé de sérieuses connaissances en
                                    <br>
                                    programmation d'applications, de la modélisation avec UML (Langage de Modélisation <br>
                                    Unifié) 📈 et l'utilisation de différentes logiciels de codage et en matière de <br>
                                    graphisme ou de mise en page🧑‍💻; qui alliées à mes qualités de jeune informaticienne,
                                    <br>
                                    de ma créativité et de ma détermination m’ont conforté dans ma volonté d’intégrer une
                                    <br>
                                    entreprise dynamique, pleine d’avenir et d’ambition🚀. <br>
                                    <br>
                                    Trés bonnes compétences en : <br>
                                    <br>
                                    - Gestion de projets informatiques <br>
                                    - Développement front-end <br>
                                    - Développement back-end <br>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingfive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapsefive" aria-expanded="false"
                                    aria-controls="flush-collapsefive">
                                    Formation
                                </button>
                            </h2>
                            <div id="flush-collapsefive" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingfive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Hello👋 <br>
                                    j'espère que tu vas bien <br>
                                    LinkedIn m'incite à te parler un peu de comment je suis, ce que je fais et comment je
                                    <br>
                                    vois l'avenir. <br>
                                    📌Motivée et ambitieuse, je suis une passionnée du digital, de l'informatique en <br>
                                    particulier, par tout ce qui est innovation et création💡🚀. <br>
                                    📌Je suis développeuse d'application web et logiciel et diplomée de l'Institut National
                                    <br>
                                    des Technologies de l'Information (NIIT) en licence professionnelle Génie Logiciel. <br>
                                    📌Grâce à ma formation en génie logiciel, j’ai développé de sérieuses connaissances en
                                    <br>
                                    programmation d'applications, de la modélisation avec UML (Langage de Modélisation <br>
                                    Unifié) 📈 et l'utilisation de différentes logiciels de codage et en matière de <br>
                                    graphisme ou de mise en page🧑‍💻; qui alliées à mes qualités de jeune informaticienne,
                                    <br>
                                    de ma créativité et de ma détermination m’ont conforté dans ma volonté d’intégrer une
                                    <br>
                                    entreprise dynamique, pleine d’avenir et d’ambition🚀. <br>
                                    <br>
                                    Trés bonnes compétences en : <br>
                                    <br>
                                    - Gestion de projets informatiques <br>
                                    - Développement front-end <br>
                                    - Développement back-end <br>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
