<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <link rel="stylesheet" href="{{ asset('assets/css/contact.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/header.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">

    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@700&family=Ubuntu&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>

<body>

    @include('navbar.header')

    <!-- contact section -->
    <section id="contact-section">
        <div class="container-fluid bloc1">
            <div class="container">
                <div class="row col-md-12">
                    <h5 class="card-title">Contact</h5>
                    <div class="card col-md-6 d-flex justify-content-between">
                        <div class="card-body">
                            <p class="card-text" style="color: #FFFFFF; width:100%">Prêt à vivre une expérience incomparable avec
                                JOKKOLANTE?</p>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-between">
                        <img src="{{ asset('assets/images/contact.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <h2>Contactez_nous</h2>
            <p>Prêt à travailler et passer au stade supérieur sur Jokkalante?</p>
            <div class="contact-form">

                <!-- second grid -->
                <div>
                    <form>
                        <input type="text" placeholder="Votre nom" required>
                        <!-- <input type="text" placeholder="Last Name"><br> -->
                        <input type="Email" placeholder="Votre mail" required><br>
                        <!-- <input type="text" placeholder="Subject of this message"><br> -->
                        <textarea name="message" placeholder="Votre message..." rows="5" required></textarea><br>
                        <button class="submit">Envoyer</button>
                    </form>
                </div>

                <!-- First grid -->
                <div>
                    <span class="form-info"> <b>Adresse</b></span><br>
                    <span class="form-info"> Keur Massar, Dakar, SENEGAL</span><br>
                    <span class="form-info"> <b>Temps de réponse</b></span><br>
                    <span class="form-info"> Entre Lundi et Vendredi</span><br>
                    <!-- <p>Temps de réponse</p>
          <p>Entre Lundi et Vendredi</p> -->
                    <span class="form-info"> <b>Email</b></span><br>
                    <span class="form-info"> contact@Jokkolante.com--</span><br>
                    <!-- <p>contact@Jokkolante.com--</p> -->
                    <span class="form-info"> <b>Numéro de téléphone</b></span><br>
                    <span class="form-info">(+221) 78 132 01 05</span><br>
                    <!-- <p>78132 01 05</p> -->
                </div>

            </div>
        </div>
        <div class="container-flu pb-5 local">
            {{-- <h1
                style="text-align: center; font-family: 'Ubuntu',sans-serif; font-weight: 500px; margin-top: 50px; margin-bottom: 50px;">
                Notre Position</h1> --}}
            <div style="box-shadow: 0 0 30px rgba(214, 215, 216, 0.6);" class="gmap_canvas w-100"><iframe width="100%"
                    height="500" id="gmap_canvas"
                    src="https://maps.google.com/?q=14.7223553,-17.1684993&entry=gps&output=embed" frameborder="0"
                    scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                    href="https://putlocker-is.org"></a><br><a href="https://www.embedgooglemap.net">google html
                    code</a>
                <style>
                    .gmap_canvas {
                        overflow: hidden;
                        background: none !important;
                        height: 450px;
                        width: 100%;
                    }
                </style>
            </div>
        </div>
    </section>
    @include('navbar.footer')
</body>


</html>
