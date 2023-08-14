<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}">
   </head>

<body>

    <div class="bg fixed-top">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('assets/images/logos.png') }}" alt="">
                </a>
                {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> --}}
                <div class="collapse navbar-collapse">

                    <div class="langue">
                        <span class="active">FR</span>
                        <span>EN</span>
                    </div>
                    <div class="d-flex profil">
                        <div class="btn">
                            <div class="dropdown">
                                <img src="{{ asset('assets/images/burger.png') }}" alt="" class="burger"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                {{-- <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                              Dropdown button
                            </button> --}}
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item gras" href="#">Connexion</a></li>
                                    <li><a class="dropdown-item gras" href="#">Inscription</a></li>
                                    <div class="trait"></div>
                                    <li><a class="dropdown-item" href="#">Trouver des freelances</a></li>
                                    <li><a class="dropdown-item" href="#">Trouver des clients</a></li>
                                    <li><a class="dropdown-item" href="#">Aide</a></li>
                                </ul>
                                <img src="{{ asset('assets/images/profil.png') }}" alt="" class="prof">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>

</body>

</html>
