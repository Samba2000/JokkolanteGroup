<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
     <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@700&family=Ubuntu&display=swap" rel="stylesheet">

    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/step.css')}}" rel="stylesheet">
    <title></title>
</head>
<body>
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="{{route ('home')}}">
    <img  src="{{asset('assets/images/logo.ico')}}"  width="50" height="50" alt="">
  </a>
  <div class="col-md-5 freelance">

    <p style="color: #009EE2"> 784 freelances actifs
    <span style="color: black" > en ce moment </span></p>
  </div>
   <div class="circle">
        <div class="notice">

        </div>
       <img src="assets/images/Mask.png" width="53px" alt="" style="margin-top: -11px;">
    </div>
    <div class="circle">
        <div class="notice">

        </div>
       <img src="assets/images/Mask.png" width="53px" alt="" style="margin-top: -11px;">
    </div>
    <div class="circle">
        <div class="notice">

        </div>
       <img src="assets/images/Mask.png" width="53px" alt="" style="margin-top: -11px;">
    </div>
    <div class="circle">
        <div class="notice">

        </div>
       <img src="assets/images/Mask.png" width="53px" alt="" style="margin-top: -11px;">
    </div>

     <i class="fa-solid fa-circle-xmark" style= "font-size: x-large;"></i>
</nav>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
</div>
  <h2 class="row-w-100 titr">Pour terminer, entrez vos freelance</h2>

  <div class="row justify-content-md-center" style="width:100%;padding:12px;">
<div class="col-md-3">
    <label for="inputState" class="form-label">Code Postal</label>
    <input type="text" style="color: rgba(0, 0, 0, 0.1);" class="form-control"  placeholder="Code Postal" aria-label="First name">
  </div>
  <div class="col-md-3">
    <label for="inputState" class="form-label">Pays</label>
    <select type="select"  class="form-control form-select"  aria-label="Disabled select example">
    <option selected > Sénégal</option>
  <option value="1">Mali</option>
  <option value="2">Gambie</option>
  <option value="3">Mauritani</option>
    </select>
  </div>
</div>


  <div class="col-md-7 carr1">
       <img  class="vector" style="width: 50px;height: 50px;"src="{{asset('assets/images/Vector.png')}}" alt="">
     <p class="msgl">Ces information sont affichées sur le plateforme pour aider les freelances à cibler votre annonce</p>

    </div>
    <div class="container-fluid footer">
        <div class="row foot">
            <a class="col-md-6" href="step5">Retour</a>
       <a id="but1" href="step8" class="col-md-6 btn btn-primary">Valider l'annonce </a>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
