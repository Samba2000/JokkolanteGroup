<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('assets/images/logo.ico') }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('assets/css/header_dash_client.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/css/dash_client.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">

    <link href='https://fonts.googleapis.com/css?family=Manrope' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@700&family=Ubuntu&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <title>Dashboard</title>
</head>

<body>w
    @include('dashboard_client.navbar.header')
    <div class="container-fluid infos">
        <h4>#mBedello Camara DANSOKHO</h4>
        <div class="rectangle-profil">
            <div class="rectanggle-bleu">
                <img src="{{ asset('assets/images/profil-dash.png') }}" alt="">
            </div>
        </div>
    </div>
    <div class="container-fluid infos-profil">
        <h4>Modifier mes informations de connexion</h4>
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <h5>Mon compte</h5>
                    <p><img src="" alt=""> Mes infos de connexion</p>
                    <p><img src="" alt=""> Mes coordonnées</p>
                    <p><img src="" alt=""> Mes alertes e-mail</p>
                    <p><img src="" alt=""> Mes factures</p>
                    <p><img src="" alt=""> Ma carte bancaire</p>
                    <h5>Mes projets</h5>
                    <p><img src="" alt=""> Gérer mes projets</p>
                    <p><img src="" alt=""> Créer un nouveau projet</p>
                    <h5>Aide</h5>
                    <p><img src="" alt=""> Questions fréquentes</p>
                    <p><img src="" alt=""> Nous contacter</p>
                    <h5>Mes paramètres</h5>
                    <p><img src="" alt=""> Supprimer mon compte</p>
                </div>
                <div class="col-6">
                    <form class="formulaire">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mon pseudo <span>(obligatoire)</span></label>
                            <input type="pseudo" class="form-control" id="exampleInputPseudo1"
                                aria-describedby="pseudoHelp">
                            <small id="pseudoHelp" class="form-text text-muted">Votre pseudo sera affiché sur le site et
                                utilisé pour vous identifier. En minuscule, sans espace, que
                                des lettres, chiffres et caractères "-" et "_".</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Adresse e-mail <span>(obligatoire)</span></label>
                            <input type="email" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mot de passe</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                            <small id="passwordHelp" class="form-text text-muted">Laisser vide si vous ne souhaitez pas le
                                modifier.</small>
                        </div>

                        <button type="submit" class="btn bouton">Mettre à jour</button>
                    </form>
                </div>
                <div class="col-3 blo3">
                    <h3>Connexion rapide
                        à Jokkolante
                        Messenger</h3>
                        <img src="{{ asset('assets/images/scan-profil.svg') }}" alt="">
                        <p>Recevez et répondez à
                            vos messages privés
                            directement sur votre
                            smartphone avec
                            l’application Jokkolante
                            Messenger. Téléchargez
                            gratuitement Jokkolante
                            Messenger sur l’Apple
                            Store ou Google Play
                            Store. Puis connectez
                            -vous rapidement en
                            scannant ce QR Code
                            depuis l’application.</p>
                </div>
            </div>
        </div>
    </div>
    @include('navbar.footer')
</body>

</html>
