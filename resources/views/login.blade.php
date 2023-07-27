<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">

    <title>login</title>
</head>

<body>
    <div class="container" id="container">

        <a class="navbar-brand m-3" href="index.php"><img src="../publics/images/Group571.png" width="250"
                alt=""></a>

        <form class="form" method="POST" action="{{ route('login.submit') }}">
            @csrf
            <h4 class="texte text-primary text-center py-2"
                style=" font-family: 'Ubuntu';font-style: normal;font-weight: 400;font-size: 22px;line-height: 34px;align-items: center;text-align: center;color: #009EE2;">
                Bienvenue sur <span
                    style="font-family: 'Ubuntu';font-style: normal;font-weight: 700;font-size: 22px;line-height: 34px;align-items: center;text-align: center;letter-spacing: -0.02em;color: #009EE2;">
                    JokkolanteGroup.com</span>
            </h4>
            <div class="bg-primary  text-center ">
                <h5 class="text-white py-2">
                    Connectez-vous avec un compte ci-dessous :
                </h5>

                <div class="three">
                    <a class="text-reset" href="">
                        <img src="../publics/images/inst.png" width="25px" height="25px" alt="" />
                    </a>
                    <a class="text-reset" href="https://www.facebook.com/Jokkolantegroup?mibextid=LQQJ4d">
                        <img src="../publics/images/face.png" width="25px" height="25px" alt="" />
                    </a>

                    <a class="text-reset" href="https://twitter.com/jokkolante?t=gE7J4WZzU6kc2MukiG2_zw&s=09">
                        <img src="../publics/images/tiw.png" width="25px" height="25px" alt="" />
                    </a>
                    <a class="text-reset" href="https://www.linkedin.com/company/jokkolante">
                        <img src="../publics/images/link.png" width="25px" height="25px" alt="" />
                    </a>

                </div>
            </div>
            <h5 class="text text-primary py-2 text-center">
                Ou connectez-vous avec un mot de passe :
            </h5>
            <div class="imp">
                <label
                    style="font-family: 'Ubuntu';font-style: normal;font-size: 15px;letter-spacing: -0.02em;color: #009EE2;margin-top:10px;">Votre
                    e-mail ou votre pseudo</label>
                <input type="text" name="pseudo" class="form-control w-75" placeholder="Votre e-mail ou votre pseudo" required>

                <label
                    style="font-family: 'Ubuntu';font-style: normal;font-size: 15px;letter-spacing: -0.02em;color: #009EE2;">Votre mot de passe</label>
                <input type="password" name="password" class="form-control w-75" placeholder="Votre mot de passe" required>
                <div class="form-check ">
                    
                    <label
                        style="font-family: 'Ubuntu';font-style: normal;font-size: 15px;letter-spacing: -0.02em;color: #009EE2;">Se
                        souvenir de moi</label>
                </div>
            </div>
            <span id="error" style="color: red; text-align:center;">
                
            </span>
            <input type="submit" id='submit' name="valider" value='Se connecter'>

        </form>

        <div class="container">

            <p class=" text-center text-dark">
                Pas encore membre ? <a href="userSignUp" class=" text-dark ">Cliquez-ici pour une demande d’être
                    admin</a> <br>
                <a style="color: #009EE2;" href="#"> Mot de passe oublié ? </a>
            </p>
            <div class="row modif"
                style="background-image: url(../publics/images/Group352.jpg); background-size: contain;background-repeat: no-repeat;">

            </div>
        </div>
    </div>
</body>

</html>
