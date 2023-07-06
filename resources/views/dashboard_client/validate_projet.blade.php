<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validation d'un projet</title>
    <link rel="icon" href="{{ asset('assets/images/logo.ico') }}" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/validate-projet.css') }} ">

    <link rel="stylesheet" href="{{ asset('assets/css/header_dash_client.css') }} ">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/dash_client.css') }} "> --}}
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}"> --}}

    <link href='https://fonts.googleapis.com/css?family=Manrope' rel='stylesheet'>

    <link rel="stylesheet" href="ttps://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@700&family=Ubuntu&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</head>

<body>

    @include('dashboard_client.navbar.header')
    <div class="container-fluid infos-projets">
        {{-- <h4>#mBedello Camara DANSOKHO</h4> --}}
        <div class="rectangle-profil">
            <div class="rectanggle-bleu">
                <img src="{{ asset('assets/images/profil-dash.png') }}" alt="">
            </div>
        </div>
    </div>




    <div class="container-fluid validate-projet" id="depot3">
        <h1>Validé !!</h1>

        <div class="container validate">
            <div class="row">

                <div class="col-md-12 mb-3">
                    <div class="col-md-12 trait"></div>
                </div>

                <div class="col-md-12 mb-3">
                    <div class="col-md-12 image-validate">
                        <img src="{{ asset('assets/images/ibot.png') }}" alt="">
                    </div>
                </div>

            </div>
        </div>

        <div class="container-fluid validate-footer">
            {{-- <div class="clip-validate">
            </div> --}}
            <button><a href="{{ route('create_projet') }}">Retour</a>
            </button>
            <img src="{{ asset('assets/images/clip-projet.png') }}" alt="">
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="{{ asset('assets/js/pagination.js') }}"></script>

</body>

</html>
