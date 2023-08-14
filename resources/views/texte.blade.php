<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>


    <div class="main-panel">
        <header class="header">
            <!-- Header content here -->
            <div class="navbar-brand-wrapper d-flex justify-content-center">
                <a class="navbar-brand brand-logo d-flex justify-content-center" href="index.html">
                    <img src="{{ asset('assets/images/Jokkolanté KK 1.png') }}" alt="logo" class="logo-light" />
                </a>
                <a class="navbar-brand brand-logo-mini" href="index.html"><img
                        src="{{ asset('assets/images/Jokkolanté KK 1.png') }}" alt="logo" /></a>
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
        </header>
        <main class="content">
            <!-- Dashboard content here -->
        </main>
    </div>
    <nav class="sidebar">
        <!-- Sidebar content here -->
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
    <script src="script.js"></script>
</body>

</html>
