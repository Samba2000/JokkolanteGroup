@extends('dashbord')
@section('head')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil Administrateur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/header_dash_client.css') }} "> --}}
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/profil_administrateur.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dashbord.css') }}">

    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@700&family=Ubuntu&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
@endsection
@section('content')
    <div class="admin">
        <h2>Bienvenue chez l’admin Jokkalante</h2>
    </div>
    <div class="form-control" style="text-align: center">
        <button>Profil administrateur</button>
    </div>
    <div class="col-md-12 d-flex justify-content-center">
        <img src="http://127.0.0.1:8000/assets/images/jokko.png" alt="">
    </div>
    <div class="container flex">
        <div class="page-admin flex">
            <form action="#">
                <input type="email" placeholder="admin@gmail.com" required>
                <input style="font-weight: 900" type="password" placeholder="........" required>
            </form>
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

