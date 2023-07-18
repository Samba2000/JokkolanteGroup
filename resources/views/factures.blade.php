@extends('dashbord')
@section('head')
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Liste des factures</title>
    <link rel="icon" href="{{ asset('assets/images/logo.ico') }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('assets/css/dashbord.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/factures.css') }}">

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
    <div class="factures">
        <div class="col-sm-12 d-flex justify-content-center">
            <h1 class="">Bienvenue chez l’admin Jokkalante</h1>
        </div>

        <div class="input">
            <form method="get" action="{{ route('recherche_facture') }}">
                @csrf
                <input type="text" id="search" class="" placeholder="Recherche" name="recherche">
            </form>
        </div>
        <div class="table-responsive text-nowrap">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">Numero#</th>
                        <th scope="col">Date de création</th>
                        <th scope="col">Statut</th>
                        <th scope="col">Po#</th>
                        <th scope="col">Total</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($factures as $key => $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->date_creation }}</td>
                            <td>{{ $item->statut }}</td>
                            <td>{{ $item->po }}</td>
                            <td>{{ $item->total }}</td>
                            <td>
                                <form action="" method="Post">
                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#edit_facture{{ $item->id }}">
                                        Edit
                                    </button>
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('delete-facture', $item->id) }}">
                                        <button type="button" class="btn btn-danger">Delete</button>
                                    </a>
                                </form>

                            </td>

                        </tr>
                        <div class="modal fade" id="edit_facture{{ $item->id }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <form method="post" action="{{ route('edit_facture') }}">
                                        @csrf
                                        <input type="text" name="id" value="{{ $item->id }}" hidden>
                                        <div class="col-md-12 ">
                                            <div class="col-md-12">
                                                <label for="exampleFormControlInput1" class="form-label">Date de
                                                    création</label>
                                                <input type="date" class="form-control" id="exampleFormControlInput1"
                                                    name="date_creation" value="{{ $item->date_creation }}"
                                                    id="date_creation">
                                            </div>
                                        </div>
                                        <div class="col-md-12 ">
                                            <div class="col-md-12">
                                                <label for="exampleFormControlInput1" class="form-label">Statut</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                                    name="statut" value="{{ $item->statut }}" id="statut">
                                            </div>
                                        </div>
                                        <div class="col-md-12 ">
                                            <div class="col-md-12">
                                                <label for="exampleFormControlInput1" class="form-label">Po</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                                    name="po" value="{{ $item->po }}" id="po">
                                            </div>
                                        </div>
                                        <div class="col-md-12 ">
                                            <div class="col-md-12">
                                                <label for="exampleFormControlInput1" class="form-label">Total</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                                    name="total" value="{{ $item->total }}" id="total">
                                            </div>
                                        </div>

                                        <div class="col-md-12 mt-3">
                                            <div class="col-md-6 except">
                                                <button class="btn nouveau-projet">
                                                    Modifier
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <ul class="error">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td scope="col">&nbsp;</td>
                    </tr>
                </tfoot>
            </table>
        </div>

    </div>
@endsection
@section('foot')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="{{ asset('assets/js/pagin)ation_dash.js') }}"></script>
@endsection
