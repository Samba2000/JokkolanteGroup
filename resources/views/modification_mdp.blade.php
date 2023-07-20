@extends('dashbord')
@section('head')
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Modification Mot de Passe</title>
    <link rel="icon" href="{{ asset('assets/images/logo.ico') }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('assets/css/dashbord.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/modification_mdp.css') }}">

    <link href='https://fonts.googleapis.com/css?family=Manrope' rel='stylesheet'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="ttps://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@700&family=Ubuntu&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
@endsection
@section('content')
    <div class="admin">
        <h2>Bienvenue chez l’admin Jokkalante</h2>
    </div>
    <div class="md-pass">
        <div class="form-control" style="justify-content: center">
            <label>Entrer votre ancien mot de passe</label>
            <input id="ancien_pw" type="password" required>
        </div>
        <div class="form-control">
            <label>Entrer votre nouveau mot de passe</label>
            <input id="create_pw" type="password" required>
        </div>
        <div class="form-control">
            <label>Confirmer votre nouveau mot de passe</label>
            <input id="confirm_pw" type="password" required disabled>
            <i class="fas fa-eye-slash show"></i>
        </div>
        <div class="form-control">
            {{-- <i class="fa-solid fa-check"></i> --}}
            <i class="fas fa-exclamation-circle error"></i>
            <span class="text">Entrez au moins 8 caractères</span>
        </div>
        <div class="form-control">
            <button id="button" type="button" value="Check" disabled>Modifier mot de passe</button>
        </div>
    </div>
@endsection
@section('foot')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="{{ asset('assets/js/pagination_dash.js') }}"></script>
    <script src="{{ asset('assets/js/modification_mdp.js') }}"></script>
@endsection
