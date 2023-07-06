<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@700&family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <title>FactureClient</title>
    <link rel="stylesheet" href="{{ asset('assets/css/header_dash_client.css') }} ">
      <link href="{{asset('assets/images/logo.ico')}}" rel="icon">
    <link rel="stylesheet" href="{{ asset('assets/css/facture.css') }} ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/jquery-3.5.1.js">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap4.min.js">


</head>

<body>

    @include('Dashboard/header');

    <div class="container-fluid1 py-5">
        <div class="container  py-5">
            <div class="row m-5 text-center mb-3 ml-4 mr-4">
                <div class="col-lg-4 col-md-12 mb-3">
                    <div class="cadreImage1 text-center ">
                        <h2>
                            Facturer à :
                        </h2>
                        <p class="box-title">
                            Samba Laobé</p>

                        <p class="box-title">
                              Jokkolante</p>

                        <p class="box-title">
                             33 rue Republique</p>

                         <p class="box-title"> 5555 Sénégal</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12  mb-3">
                    <div class="cadreImage1 text-center ">
                        <h2>
                            Envoyer à :
                        </h2>
                        <p class="box-title">
                            Samba Laobé</p>

                        <p class="box-title">
                              Jokkolante</p>

                        <p class="box-title">
                             33 rue Republique</p>

                         <p class="box-title"> 5555 Sénégal</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12  mb-3">
                    <div class="cadreImage1 text-center">
                        <h2>
                            Devis N :
                        </h2>


                        <p class="box-title">
                            Date de devis:</p>

                        <p class="box-title">
                            Comande N:</p>


                    </div>
                </div>
            </div>
        </div>
    </div>
     <div class="container-fluid py-5">
        <div class="container  py-5">
            <div class="image">

            <img src="{{ asset('assets/images/Jokkolanté.png') }}" alt="">
            </div>
        </div>
    </div>
     <table id="example" class="table table-striped table-bordered">
        <thead class=" text-center">
            <tr>
                <th>N² de Facture</th>
                <th>Description</th>
                <th>Date</th>
                <th>Quantites</th>
                <th>Montant</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr style="background-color:#009EE2;">
                <td>201</td>
                <td>Logo</td>
                <td>19/12/2022</td>
                <td>01</td>
                <td>300000f CFA</td>
                <td> <a href="" style="color:#FF4040;">Enregistrer</a> <a href=""style="color:#FDE405;">  Supprimer</a></td>
            </tr>
            <tr>
                <td>202</td>
                <td>Typographie</td>
                <td>09/12/2022</td>
                <td>06</td>
                <td>250000f CFA</td>
                <td> <a href=""style="color:#FF4040;">Enregistrer</a> <a href=""style="color:#FDE405;">  Supprimer</a></td>

            </tr>
            <tr style="background-color:#009EE2;">
                <td>203</td>
                <td>Site Web</td>
                <td>San Francisco</td>
                <td>25/12/2022</td>
                <td>01</td>
                <td> <a href="" style="color:#FF4040;">Enregistrer</a> <a href=""style="color:#FDE405;">  Supprimer</a></td>

            </tr>
               <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            <tr  style="background-color:#009EE2;">
                <td>204</td>
                <td>Responsive</td>
                <td>09/12/2022</td>
                <td>04</td>
                <td>300000f CFA</td>
                <td> <a href="" style="color:#FF4040;">Enregistrer</a> <a href=""style="color:#FDE405;">  Supprimer</a></td>
            </tr>


            <tr style="background-color:#009EE2;color:white;">
                <td></td>
                <td></td>
                <td></td>
                <td style="color:white;">TOTAL</td>
                <td style="color:white;">1.450.000.000f CFA</td>
                <td> <a href="" style="color:white;">Envoyer</a></td>
            </tr>

        </tbody>

    </table>
{{--
<div class="row">
<div class="col-sm-12 col-md-7">
<div class="dataTables_paginate paging_simple_numbers" id="example_paginate">
<ul class="pagination">
<li class="paginate_button page-item previous disabled" id="example_previous">
<a aria-controls="example" aria-disabled="true" role="link" data-dt-idx="previous" tabindex="0" class="page-link">
Previous</a>
</li>
<li class="paginate_button page-item active">
<a href="#" aria-controls="example" role="link" aria-current="page" data-dt-idx="0" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" role="link" data-dt-idx="1" tabindex="0" class="page-link">2</a>
</li><li class="paginate_button page-item next" id="example_next"><a href="#" aria-controls="example" role="link" data-dt-idx="next" tabindex="0" class="page-link">Next</a></li></ul></div></div></div> --}}
</body>
</html>
