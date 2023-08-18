<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="{{ asset('assets/css/chargement.css') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('assets/images/logo.ico') }}" type="image/x-icon" />
    <title>Chargement...</title>
</head>

<body>
    <div class="container">
        <div class="image">
            <img src="{{ asset('assets/images/icon2.png') }}" alt="..." />
        </div>
        <p class="card-text">
            Merci d’utiliser JOKKOLANTEGROUP.COM
        </p>
        <div class="loader">
            <span class="btn"></span>
            <span class="btn"></span>
            <span class="btn"></span>
            <span class="btn"></span>
            <span class="btn"></span>
        </div>
        <!-- <div class="loader"></div> -->
        <script>
            // Fonction pour rediriger vers une autre page après un délai
            function redirectWithDelay(delay) {
                setTimeout(function() {
                    // window.location.href = url;
                    // window.location.href = "{{ URL::to('/dashboard') }}";
                    @php if($souvenir) { @endphp
                        window.location.href = "{{ route('apres_connexion') }}";
                    @php } else { @endphp
                        window.location.href = "{{ route('dashboard') }}";
                    @php } @endphp
                }, delay);
            }

            // Appel de la fonction pour rediriger vers une autre page après 3 secondes
            redirectWithDelay(3000);
        </script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var buttons = document.querySelectorAll(".btn");
                var index = 0;

                function activateButton() {
                    if (index < buttons.length) {
                        buttons[index].classList.add("active");
                        index++;
                        setTimeout(activateButton, 500); // Délai avant d'activer le prochain bouton (en millisecondes)
                    }
                }

                activateButton();
            });
        </script>

</body>

</html>
