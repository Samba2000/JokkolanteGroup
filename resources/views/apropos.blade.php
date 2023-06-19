<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>À propos</title>
    <link rel="icon" href="{{ asset('assets/images/logo.ico') }}" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/apropos.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/css/header.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">

    <link href='https://fonts.googleapis.com/css?family=Manrope' rel='stylesheet'>

    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@700&family=Ubuntu&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>

<body>

    @include('navbar.header')

    <div class="container-fluid bloc1">
        <div class="container">
            <div class="row col-md-12 ">
                <div class="card col-md-6 d-flex justify-content-between">
                    <div class="card-body">
                        <h5 class="card-title">JOKKOLANTE</h5>
                        <p class="card-text">JoKKolante donne une autre dimension à vos perf’ digitales.</p>
                        <a href="#" class="card-link bt1"><button class="btn">Nos formations</button></a>
                        <a href="#" class="card-link bt2"><button class="btn">Contactez nous</button></a>
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-between">
                    <img src="{{ asset('assets/images/apropos.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="container bloc2">
        <p>Vos&nbsp;<span>valeurs</span>, notre&nbsp;<span> vision </span> </p>
        <div class="row col-md-12 ">

            <div class="card col-md-6 d-flex justify-content-end">
                <img src="{{ asset('assets/images/Bg_ap.png') }}" alt="">
            </div>
            <div class="card col-md-6 d-flex justify-content-between">
                <div class="card-body">
                    <p class="card-text">
                        L’entreprise a été pensée pour répondre aux besoins des entreprises qui sont peu présentes ou
                        pas dans le monde du digital, nos valeurs : <br>
                        Créativité et innovation <br>
                        Ø Universalité et réflexivité <br>
                        Ø Passion et ouverture d’esprit <br>
                        Ø Solidarité et recherche de perfection
                    </p>
                    <a href="#" class="card-link bt1"><button class="btn">Nos services</button></a>
                </div>
            </div>
        </div>
        {{-- <div class="row col-md-12 ">
            <div class="card col-md-6 d-flex justify-content-between">
                <div class="card-body">
                    <p class="card-text">
                        Avec JooKKoalnte, l’entreprise ou la marque est au cœur du digital. Elle est présente dans tous
                        les réseaux du web, au milieu d’une communauté qui le comprend et qui adhère à ses valeurs.
                        Notre mission est de rendre les compétences accessibles, tout en créant un réseau professionnel
                        favorisant des opportunités à impact positives.
                    </p>
                    <a href="#" class="card-link bt1"><button class="btn">Nos formations</button></a>
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-between">
                <img src="{{ asset('assets/images/Bg_app.png') }}" alt="">
            </div>
        </div> --}}
    </div>
    <div class="container bloc3">
        <div class="row col-md-12 ">
            <div class="card col-md-6 d-flex justify-content-between">
                <div class="card-body">
                    <p class="card-text">
                        Avec JooKKoalnte, l’entreprise ou la marque est au cœur du digital. Elle est présente dans tous
                        les réseaux du web, au milieu d’une communauté qui le comprend et qui adhère à ses valeurs.
                        Notre mission est de rendre les compétences accessibles, tout en créant un réseau professionnel
                        favorisant des opportunités à impact positives.
                    </p>
                    <a href="#" class="card-link bt1"><button class="btn">Nos formations</button></a>
                </div>
            </div>
            <div class="card col-md-6 d-flex justify-content-between">
                <img src="{{ asset('assets/images/Bg_app.png') }}" alt="">
            </div>
        </div>
    </div>

    <div class="container-fluid bloc4">
        <div class="row col-md-12">
            <p>Se réunir est un <span>début</span>,</p>
            <p> rester ensemble est un <span>progrès</span>,</p>
            <p>travailler ensemble est la <span>réussite</span>.</p>
            <h5>HENRY FORD</h5>
        </div>
    </div>

    <div class="container-fluid">
        <div class="container-fluid bloc5">
            <div class="row col-md-12">
                <p><span>7 domaines</span> de compétences au service de votre <span>image</span> et de votre
                    <span>performance</span>
                </p>
                <a href="#" class="card-link bt2"><button class="btn">Découvrez maintenant</button></a>
            </div>
        </div>

        <div class="container-fluid bloc6">
            <div class="row col-md-12">
                <p>Notre <span>valeur ajoutée</span> </p>
                <div class="container">
                    <div class="card col-md-4">
                        <p>Une equipe d’experts</p>
                    </div>
                    <div class="card col-md-4">
                        <p>Un service de qualité</p>
                    </div>
                    <div class="card col-md-4">
                        <p>Une mission bien définie</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid bloc7">
            <div class="row col-md-12">
                <p>Les fondateurs</p>

                <div class="containerm">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="images"> <img src="{{ asset('assets/images/dans.svg') }}" alt="">
                                <p>Camara DANSOKHO</p>
                                <span>ETUDIANT</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="images"> <img src="{{ asset('assets/images/ous.svg') }}" alt="">
                                <p>Papa Ousseynou AW</p>
                                <span>CEO of JOKKOLANTE</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="images"> <img src="{{ asset('assets/images/ch.svg') }}" alt="">
                                <p>Birahim Chimere DIAW</p>
                                <span>CM de JOKKOLANTE</span>
                            </div>
                        </div>
                    </div>
                </div>

                <h5>Rejoignez-nous !</h5>
                <h6>Postes ouverts au recrutement</h6>
            </div>
        </div>
    </div>
    <div class="accordion" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseOne">
                    Designer graphique
                </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse"
                aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body">
                    Envie de rejoindre une agence dont la croissance accélère ? <br>
                    <br>
                    Deviens la nouvelle pépite du pôle Stratégie de JOKKOLANTE, agence de marketing digital de 60 <br>
                    personnes dédiée à l'accompagnement de toutes les typologies d'annonceurs, en plein développement.
                    <br>
                    <br>
                    LA MISSION : Assister et accompagner ton manager, un.e Account Strategist de l'équipe de JOKKOLANTE,
                    <br>
                    dans le suivi et la gestion de son portefeuille de 15-20 clients , de la recommandation stratégique
                    <br>
                    au reporting sur les différents leviers digitaux SEA, SMA, Display, Vidéo... <br>
                    <br>
                    Assister ton manager dans le suivi du portefeuille clients, bon déroulé des opérations, respects des
                    <br>
                    budgets et performances, relation clientèle... <br>
                    <br>
                    🚀 Identifier les besoins clients et proposer des idées de réponses associées à ces besoins. <br>
                    <br>
                    🚀 Travailler sur les recommandations clients et les plans stratégiques <br>
                    <br>
                    🚀 Coordonner les projets en interne avec les différentes équipes : SEA, SMA, SEO, RTB... <br>
                    <br>
                    🚀 Établir un reporting régulier à destination de tes clients mais également de l'interne. <br>
                    <br>
                    🏆 LE GRAAL : ta motivation, ton implication et tes succès répétés te permettent de décrocher un
                    <br>
                    poste en CDI à la suite de ton parcours en Stage ou Alternance <br>
                    <br>
                    <br>
                    <br>
                    Curieux.se et dynamique, tu as un sens de l'organisation à toute épreuve ! Doté.e d’un excellent
                    <br>
                    relationnel, tu accompagnes tes clients avec efficacité. Tu aimes apprendre et tester les dernières
                    <br>
                    nouveautés proposées par Google, Facebook & Instagram, TikTok, Youtube... Tu es rigoureux.se et <br>
                    disposes d'un esprit de synthèse, ce job est fait pour toi !!
                    <br>
                    👇 Postule vite 👇 si tu souhaites travailler au sein d'une équipe jeune & dynamique, dans un cadre
                    <br>
                    de travail agréable et stimulant 🕺 <br>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseTwo">
                    Chef.fe de Projet Digital
                </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                aria-labelledby="panelsStayOpen-headingTwo">
                <div class="accordion-body">
                    Envie de rejoindre une agence dont la croissance accélère ? <br>
                    <br>
                    Deviens la nouvelle pépite du pôle Stratégie de JOKKOLANTE, agence de marketing digital de 60 <br>
                    personnes dédiée à l'accompagnement de toutes les typologies d'annonceurs, en plein développement.
                    <br>
                    <br>
                    LA MISSION : Assister et accompagner ton manager, un.e Account Strategist de l'équipe de JOKKOLANTE,
                    <br>
                    dans le suivi et la gestion de son portefeuille de 15-20 clients , de la recommandation stratégique
                    <br>
                    au reporting sur les différents leviers digitaux SEA, SMA, Display, Vidéo... <br>
                    <br>
                    Assister ton manager dans le suivi du portefeuille clients, bon déroulé des opérations, respects des
                    <br>
                    budgets et performances, relation clientèle... <br>
                    <br>
                    🚀 Identifier les besoins clients et proposer des idées de réponses associées à ces besoins. <br>
                    <br>
                    🚀 Travailler sur les recommandations clients et les plans stratégiques <br>
                    <br>
                    🚀 Coordonner les projets en interne avec les différentes équipes : SEA, SMA, SEO, RTB... <br>
                    <br>
                    🚀 Établir un reporting régulier à destination de tes clients mais également de l'interne. <br>
                    <br>
                    🏆 LE GRAAL : ta motivation, ton implication et tes succès répétés te permettent de décrocher un
                    <br>
                    poste en CDI à la suite de ton parcours en Stage ou Alternance <br>
                    <br>
                    <br>
                    <br>
                    Curieux.se et dynamique, tu as un sens de l'organisation à toute épreuve ! Doté.e d’un excellent
                    <br>
                    relationnel, tu accompagnes tes clients avec efficacité. Tu aimes apprendre et tester les dernières
                    <br>
                    nouveautés proposées par Google, Facebook & Instagram, TikTok, Youtube... Tu es rigoureux.se et <br>
                    disposes d'un esprit de synthèse, ce job est fait pour toi !!
                    <br>
                    👇 Postule vite 👇 si tu souhaites travailler au sein d'une équipe jeune & dynamique, dans un cadre
                    <br>
                    de travail agréable et stimulant 🕺 <br>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseThree">
                    Référent digital
                </button>
            </h2>
            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                aria-labelledby="panelsStayOpen-headingThree">
                <div class="accordion-body">
                    Envie de rejoindre une agence dont la croissance accélère ? <br>
                    <br>
                    Deviens la nouvelle pépite du pôle Stratégie de JOKKOLANTE, agence de marketing digital de 60 <br>
                    personnes dédiée à l'accompagnement de toutes les typologies d'annonceurs, en plein développement.
                    <br>
                    <br>
                    LA MISSION : Assister et accompagner ton manager, un.e Account Strategist de l'équipe de JOKKOLANTE,
                    <br>
                    dans le suivi et la gestion de son portefeuille de 15-20 clients , de la recommandation stratégique
                    <br>
                    au reporting sur les différents leviers digitaux SEA, SMA, Display, Vidéo... <br>
                    <br>
                    Assister ton manager dans le suivi du portefeuille clients, bon déroulé des opérations, respects des
                    <br>
                    budgets et performances, relation clientèle... <br>
                    <br>
                    🚀 Identifier les besoins clients et proposer des idées de réponses associées à ces besoins. <br>
                    <br>
                    🚀 Travailler sur les recommandations clients et les plans stratégiques <br>
                    <br>
                    🚀 Coordonner les projets en interne avec les différentes équipes : SEA, SMA, SEO, RTB... <br>
                    <br>
                    🚀 Établir un reporting régulier à destination de tes clients mais également de l'interne. <br>
                    <br>
                    🏆 LE GRAAL : ta motivation, ton implication et tes succès répétés te permettent de décrocher un
                    <br>
                    poste en CDI à la suite de ton parcours en Stage ou Alternance <br>
                    <br>
                    <br>
                    <br>
                    Curieux.se et dynamique, tu as un sens de l'organisation à toute épreuve ! Doté.e d’un excellent
                    <br>
                    relationnel, tu accompagnes tes clients avec efficacité. Tu aimes apprendre et tester les dernières
                    <br>
                    nouveautés proposées par Google, Facebook & Instagram, TikTok, Youtube... Tu es rigoureux.se et <br>
                    disposes d'un esprit de synthèse, ce job est fait pour toi !!
                    <br>
                    👇 Postule vite 👇 si tu souhaites travailler au sein d'une équipe jeune & dynamique, dans un cadre
                    <br>
                    de travail agréable et stimulant 🕺 <br>
                </div>
            </div>
        </div>
    </div>



    @include('navbar.footer')

</body>

</html>
