<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
    <link rel="icon" href="{{ asset('assets/images/logo.ico') }}" type="image/x-icon" />

    <title>Connexion</title>
</head>

<body>
    <div class="Jokkolant_img_top">
        <img src="{{ asset('assets/images/Jokkolant_img_top.png') }}" alt="">
    </div>
    <div class="container" id="container">

        <a class="navbar-brand m-3" href="{{ route('home') }}"><img
                src="{{ asset('assets/images/Jokkolanté White.png') }}" alt=""></a>

        <form class="form" method="POST" action="{{ route('login.submit') }}">
            @csrf
            <h4 class="texte text-primary text-center">
                Bienvenue sur Jokkolante.sn.
            </h4>
            <div class="bg-primary  text-center ">
                <h5 class="text-white">
                    Connectez-vous avec un compte ci-dessous :
                </h5>

                <div class="three">
                    <a class="text-reset" href="">
                        <img src="{{ asset('assets/images/Vector-3.png') }}" alt="" />
                    </a>
                    <a class="text-reset" href="https://www.facebook.com/Jokkolantegroup?mibextid=LQQJ4d">
                        <img src="{{ asset('assets/images/Vector-4.png') }}" alt="" />
                    </a>

                    <a class="text-reset" href="https://www.linkedin.com/company/jokkolante">
                        <img src="{{ asset('assets/images/Vector-2.png') }}" alt="" />
                    </a>
                    <a class="text-reset" href="https://twitter.com/jokkolante?t=gE7J4WZzU6kc2MukiG2_zw&s=09">
                        <img src="{{ asset('assets/images/Vector-1.png') }}" alt="" />
                    </a>

                </div>
            </div>
            <h5 class="text text-primary py-2 text-center">
                Ou connectez-vous avec un mot de passe :
            </h5>
            <div class="imp">
                <label>Votre e-mail ou votre pseudo</label> <br>
                <input type="text" name="email" class="form-control w-75" placeholder="" required>
                <br>
                <label>Votre mot de passe</label><br>
                <input type="password" name="password" class="form-control w-75" placeholder="" required>
                <div class="form-check ">
                    <input class="form-check-input" type="checkbox" id="check1" name="souvenir" value="something">
                    <label class="form-check-label">Se souvenir de moi</label>
                </div>
                <input type="hidden" name="page"
                value="{{ isset($_SERVER['HTTP_RFERER']) ? $_SERVER['HTTP_RFERER'] : route('dashboard') }}">
            </div>
            <span id="error" style="color: red; text-align:center;">

            </span>
            <input type="submit" id='submit' name="valider" value='Se connecter'>

        </form>

        <div class="container">

            <p class=" text-center text-dark">
                Pas encore membre ? <a href="{{ route('inscription') }}" class="text-whit">Cliquez-ici</a> pour vous
                inscrire
                <br>
                <a href="#" class="mdp"> Mot de passe oublié ? </a>
            </p>

            <div class="row modif"
                style="background-image: url(../publics/images/Group352.jpg); background-size: contain;background-repeat: no-repeat;">

            </div>
        </div>
    </div>

    <div class="Jokkolant_img_bottom">
        <img src="{{ asset('assets/images/Jokkolant_img-bottom.png') }}" alt="">
    </div>
</body>

</html>
