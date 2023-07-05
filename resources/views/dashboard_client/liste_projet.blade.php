<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des projets</title>
    <link rel="icon" href="{{ asset('assets/images/logo.ico') }}" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/liste-projet.css') }} ">

    <link rel="stylesheet" href="{{ asset('assets/css/header_dash_client.css') }} ">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/dash_client.css') }} "> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">

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

    <div class="container-fluid infos-projet">
        <h1>Liste des projets</h1>
        <button type="button" class="btn nouveau-projet" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Creer un nouveau projet
        </button>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    {{-- <div class="modal-body"> --}}
                        <form action="">
                            <div class="col-md-12 ">
                                <div class="col-md-12">
                                    <label for="exampleFormControlInput1" class="form-label">Titre du projet</label>
                                    <input type="titre" class="form-control" id="exampleFormControlInput1" placeholder="Site e-commerce">
                                </div>
                            </div>
                            <div class="col-md-12 ">
                                <div class="col-md-12">
                                    <label for="exampleFormControlInput1" class="form-label">Date de debut</label>
                                    <input type="date_debut" class="form-control" id="exampleFormControlInput1" placeholder="11/10/2022">
                                </div>
                            </div>
                            <div class="col-md-12 ">
                                <div class="col-md-12">
                                    <label for="exampleFormControlInput1" class="form-label">Date de fin</label>
                                    <input type="date_fin" class="form-control" id="exampleFormControlInput1" placeholder="11/11/2022">
                                </div>
                            </div>

                            <div class="col-md-12 mt-3">
                                <div class="col-md-6 except">
                                    <button class="btn nouveau-projet">
                                        Créer
                                    </button>
                                </div>
                            </div>
                        </form>
                    {{-- </div> --}}
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table id="example" class="table" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">Nom</th>
                        <th scope="col">Prenom</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Titre du projet</th>
                        <th scope="col">Date de debut</th>
                        <th scope="col">Date de fin</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mbengue</td>
                        <td>Fatou</td>
                        <td>fat@gmail.com</td>
                        <td>Site e-commerce</td>
                        <td>01/10/2022</td>
                        <td>11/11/2022</td>
                        <td>
                            <img src="{{ asset('assets/images/delete.png') }}" alt="">
                            <img src="{{ asset('assets/images/edit.jpg') }}" alt="">
                        </td>
                    </tr>
                    <tr>
                        <td>Faye</td>
                        <td>Mohamed</td>
                        <td>faye@gmail.com</td>
                        <td>Gestion de clinique</td>
                        <td>02/10/2022</td>
                        <td>12/11/2022</td>
                        <td>
                            <img src="{{ asset('assets/images/delete.png') }}" alt="">
                            <img src="{{ asset('assets/images/edit.jpg') }}" alt="">
                        </td>
                    </tr>

                    <tr>
                        <td>Mbengue</td>
                        <td>Fatou</td>
                        <td>fat@gmail.com</td>
                        <td>Site e-commerce</td>
                        <td>03/10/2022</td>
                        <td>13/11/2022</td>
                        <td>
                            <img src="{{ asset('assets/images/delete.png') }}" alt="">
                            <img src="{{ asset('assets/images/edit.jpg') }}" alt="">
                        </td>
                    </tr>
                    <tr>
                        <td>Faye</td>
                        <td>Mohamed</td>
                        <td>faye@gmail.com</td>
                        <td>Gestion de clinique</td>
                        <td>04/10/2022</td>
                        <td>14/11/2022</td>
                        <td>
                            <img src="{{ asset('assets/images/delete.png') }}" alt="">
                            <img src="{{ asset('assets/images/edit.jpg') }}" alt="">
                        </td>
                    </tr>


                    <tr>
                        <td>Mbengue</td>
                        <td>Fatou</td>
                        <td>fat@gmail.com</td>
                        <td>Site e-commerce</td>
                        <td>05/10/2022</td>
                        <td>15/11/2022</td>
                        <td>
                            <img src="{{ asset('assets/images/delete.png') }}" alt="">
                            <img src="{{ asset('assets/images/edit.jpg') }}" alt="">
                        </td>
                    </tr>
                    <tr>
                        <td>Faye</td>
                        <td>Mohamed</td>
                        <td>faye@gmail.com</td>
                        <td>Gestion de clinique</td>
                        <td>06/10/2022</td>
                        <td>16/11/2022</td>
                        <td>
                            <img src="{{ asset('assets/images/delete.png') }}" alt="">
                            <img src="{{ asset('assets/images/edit.jpg') }}" alt="">
                        </td>
                    </tr>

                    <tr>
                        <td>Mbengue</td>
                        <td>Fatou</td>
                        <td>fat@gmail.com</td>
                        <td>Site e-commerce</td>
                        <td>07/10/2022</td>
                        <td>17/11/2022</td>
                        <td>
                            <img src="{{ asset('assets/images/delete.png') }}" alt="">
                            <img src="{{ asset('assets/images/edit.jpg') }}" alt="">
                        </td>
                    </tr>
                    <tr>
                        <td>Faye</td>
                        <td>Mohamed</td>
                        <td>faye@gmail.com</td>
                        <td>Gestion de clinique</td>
                        <td>08/10/2022</td>
                        <td>18/11/2022</td>
                        <td>
                            <img src="{{ asset('assets/images/delete.png') }}" alt="">
                            <img src="{{ asset('assets/images/edit.jpg') }}" alt="">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="{{ asset('assets/js/pagination.js') }}"></script>
</body>

</html>
