<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modification mot de passe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/header_dash_client.css') }} "> --}}
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/modification_mdp.css') }}">

    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@700&family=Ubuntu&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="admin">
        <h2>Bienvenue chez l’admin Jokkalante</h2>
    </div>
    <div class="md-pass">
        <div class="form-control">
            <label for="pwd" name="pwd">Entrer votre ancien mot de passe</label>
            <input id="txtPwd" type="password" name="pwd" />
            <small>Error Message</small>
        </div>
        <div class="form-control">
            <label for="pwd" name="pwd">Entrer votre nouveau mot de passe</label>
            <input id="txtPwd" type="password" name="pwd" />
            <small>Error Message</small>
        </div>
        <div class="form-control">
            <label for="conpwd" name="conpwd">Confirmer votre nouveau mot de passe</label>
            <input id="txtConPwd" type="password" name="conpwd" />
            <small>Error Message</small>
        </div>
        <div class="form-control">
            <button>Modifier mot de passe</button>
        </div>
        </form>
    </div>
</body>

</html>
