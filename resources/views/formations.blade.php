<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formations</title>
    <link rel="stylesheet" href="{{ asset('assets/css/formations.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/header.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">

    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@700&family=Ubuntu&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>

<body>

    @include('navbar/header')

    <div class="container navbars">
        <h1>Des <span style="color: #009EE2;">formations digitales </span>sur-mesure <br>
            adaptées à vos challenges
        </h1>
    </div>
    <div class="accordion" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseOne">
                    Gestion de projet agile
                </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse"
                aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body">
                    It is shown by default, until the collapse
                    plugin adds the appropriate classes that we use to style each element. These classes control the
                    overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of
                    this with custom CSS or overriding our default variables. It's also worth noting that just about any
                    HTML can go within the accordion-body, though the transition does limit overflow.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseTwo">
                    Assistant digital
                </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                aria-labelledby="panelsStayOpen-headingTwo">
                <div class="accordion-body">
                    It is hidden by default, until the
                    collapse plugin adds the appropriate classes that we use to style each element. These classes
                    control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                    modify any of this with custom CSS or overriding our default variables. It's also worth noting that
                    just about any HTML can go within the accordion-body, though the transition does limit
                    overflow.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseThree">
                    Développement Web et Mobile
                </button>
            </h2>
            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                aria-labelledby="panelsStayOpen-headingThree">
                <div class="accordion-body">
                    It is hidden by default, until the
                    collapse plugin adds the appropriate classes that we use to style each element. These classes
                    control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                    modify any of this with custom CSS or overriding our default variables. It's also worth noting that
                    just about any HTML can go within the accordion-body, though the transition does limit
                    overflow.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingfour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapsefour" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapsefour">
                    Design graphique
                </button>
            </h2>
            <div id="panelsStayOpen-collapsefour" class="accordion-collapse collapse"
                aria-labelledby="panelsStayOpen-headingfour">
                <div class="accordion-body">
                    It is hidden by default, until the
                    collapse plugin adds the appropriate classes that we use to style each element. These classes
                    control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                    modify any of this with custom CSS or overriding our default variables. It's also worth noting that
                    just about any HTML can go within the accordion-body, though the transition does limit
                    overflow.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingfive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapsefive" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapsefive">
                    Community & Social media management
                </button>
            </h2>
            <div id="panelsStayOpen-collapsefive" class="accordion-collapse collapse"
                aria-labelledby="panelsStayOpen-headingfive">
                <div class="accordion-body">
                    Le développement de la notoriété d’une marque sur les réseaux sociaux, afin d’acquérir de nouveaux
                    clients ou aussi fidéliser la base existante de clients via le levier communautaire est l’objectif
                    du community ou social media manager. C'est en quelque sorte la voix des marques sur Internet.
                    Les réseaux sociaux ont profondément changé nos habitudes de consommation. Ces nouveaux espaces
                    d’échanges ont aussi bouleversé la manière dont les organisations interagissent avec leurs
                    communautés. Ils sont également devenus un passage obligé où les marques peuvent s'exprimer,
                    interagir avec leurs clients et en recruter de nouveaux.
                    <br>
                    Compétences visées :<br>
                    -Animer une communauté avec un discours de marque.<br>
                    -Créer du contenu simple et dynamique sur les réseaux sociaux.<br>
                    -Gérer une campagne publicitaire sur les réseaux sociaux.<br>
                    -Élaborer une stratégie Social Media.<br>
                    -Gérer la communication avec des influenceurs.<br>
                    -Réaliser un audit d'e-réputation.<br>
                    -Organiser un événement live sur les réseaux sociaux.<br>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingsix">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapsesix" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapsesix">
                    Référent digital
                </button>
            </h2>
            <div id="panelsStayOpen-collapsesix" class="accordion-collapse collapse"
                aria-labelledby="panelsStayOpen-headingsix">
                <div class="accordion-body">
                    It is hidden by default, until the
                    collapse plugin adds the appropriate classes that we use to style each element. These classes
                    control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                    modify any of this with custom CSS or overriding our default variables. It's also worth noting that
                    just about any HTML can go within the accordion-body, though the transition does limit
                    overflow.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingseven">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseseven" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseseven">
                    Création de site web
                </button>
            </h2>
            <div id="panelsStayOpen-collapseseven" class="accordion-collapse collapse"
                aria-labelledby="panelsStayOpen-headingseven">
                <div class="accordion-body">
                    It is hidden by default, until the
                    collapse plugin adds the appropriate classes that we use to style each element. These classes
                    control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                    modify any of this with custom CSS or overriding our default variables. It's also worth noting that
                    just about any HTML can go within the accordion-body, though the transition does limit
                    overflow.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingeight">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseeight" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseeight">
                    Médiateur numérique
                </button>
            </h2>
            <div id="panelsStayOpen-collapseeight" class="accordion-collapse collapse"
                aria-labelledby="panelsStayOpen-headingeight">
                <div class="accordion-body">
                    It is hidden by default, until the
                    collapse plugin adds the appropriate classes that we use to style each element. These classes
                    control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                    modify any of this with custom CSS or overriding our default variables. It's also worth noting that
                    just about any HTML can go within the accordion-body, though the transition does limit
                    overflow.
                </div>
            </div>
        </div>
    </div>

    @include('navbar.footer')
</body>

</html>
