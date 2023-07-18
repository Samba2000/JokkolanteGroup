<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/maintenance.css') }}">
    <title>maintenance</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@700&family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/header2.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>
<body>

    @include('navbar.header2')

    <div class="container-fluid maintenance">
        <div class="col-md-12 justify-content-center">
            <img src="{{ asset('assets/images/404img.JPG') }}" alt="">
            <h1>Le site est en maintenance</h1>
        </div>
    </div>
    {{-- <div class="container navbars" style="margin-bottom: 40px">
        <h1>Le site est en maintenance</h1>
    </div> --}}

    @include('navbar.footer')

</body>
</html>
