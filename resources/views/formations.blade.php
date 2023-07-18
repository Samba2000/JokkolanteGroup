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

    @include('navbar.header')

    <div class="container-fluid bloc1">
        <div class="container">
            <button type="button" class="btn btn-link">Accueil </button>
            <button type="button" class="btn btn-link">> Services</button>
            <div class="row col-md-12">
                <h5 class="card-title">Nos formations certifiantes</h5>
                <div class="card col-md-6 d-flex justify-content-between">
                    <div class="card-body">
                        <p class="card-text">Initiez vous aux métiers du Digital</p>
                        {{-- <a href="#" class="card-link bt1"><button class="btn">Nos formations</button></a> --}}
                        <a href="#" class="card-link bt2"><button class="btn">Contactez nous</button></a>
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-between">
                    <img src="{{ asset('assets/images/formations.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="container navbars" style="margin-bottom: 40px">
        <h1>Des <span style="color: #009EE2;">formations digitales </span>sur-mesure <br>
            adaptées à vos challenges
        </h1>
    </div>
    {{-- <div class="accordion" id="accordionPanelsStayOpenExample">
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
    </div> --}}
    <div class="accordion accordion-redness" id="accordionFlushExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Gestion de projet agile
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the
                    <code>.accordion-flush</code> class. This is the first item's accordion body.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Assistant digital
                </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the
                    <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this
                    being filled with some actual content.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    Développement Web et Mobile
                </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the
                    <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting
                    happening here in terms of content, but just filling up the space to make it look, at least at first
                    glance, a bit more representative of how this would look in a real-world application.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingfour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
                    Design graphique
                </button>
            </h2>
            <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingfour"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the
                    <code>.accordion-flush</code> class. This is the first item's accordion body.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingfive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapsefive" aria-expanded="false" aria-controls="flush-collapsefive">
                    Community & Social media management
                </button>
            </h2>
            <div id="flush-collapsefive" class="accordion-collapse collapse" aria-labelledby="flush-headingfive"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Le développement de la notoriété d’une marque sur les réseaux sociaux, afin
                    d’acquérir de nouveaux clients ou aussi fidéliser la base existante de clients via le levier
                    communautaire est l’objectif du community ou social media manager. C'est en quelque sorte la voix
                    des marques sur Internet.
                    Les réseaux sociaux ont profondément changé nos habitudes de consommation. Ces nouveaux espaces
                    d’échanges ont aussi bouleversé la manière dont les organisations interagissent avec leurs
                    communautés. Ils sont également devenus un passage obligé où les marques peuvent s'exprimer,
                    interagir avec leurs clients et en recruter de nouveaux. <br>
                    <br>
                    Compétences visées : <br>
                    -Animer une communauté avec un discours de marque. <br>
                    -Créer du contenu simple et dynamique sur les réseaux sociaux. <br>
                    -Gérer une campagne publicitaire sur les réseaux sociaux. <br>
                    -Élaborer une stratégie Social Media. <br>
                    -Gérer la communication avec des influenceurs. <br>
                    -Réaliser un audit d'e-réputation. <br>
                    -Organiser un événement live sur les réseaux sociaux. <br>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingSix">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                    Référent digital
                </button>
            </h2>
            <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate
                    the
                    <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting
                    happening here in terms of content, but just filling up the space to make it look, at least at first
                    glance, a bit more representative of how this would look in a real-world application.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingSeven">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                    Création de site web
                </button>
            </h2>
            <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate
                    the
                    <code>.accordion-flush</code> class. This is the first item's accordion body.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingEight">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                    Médiateur numérique
                </button>
            </h2>
            <div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="flush-headingEight"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate
                    the
                    <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this
                    being filled with some actual content.
                </div>
            </div>
        </div>
    </div>

    @include('navbar.footer')

</body>

</html>
