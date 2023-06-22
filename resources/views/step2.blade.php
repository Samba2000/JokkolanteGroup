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
         <i class="fa-solid fa-circle-xmark" style= "font-size: x-large; background-color:#fff;"></i>

</nav>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>
  <h2 class="w-100 titre">Quel est votre besoin ?</h2>
        <div class="col-md-6 vers">
        <h4>Detail de votre projet</h4>
        </div>
    <div class="col-md-4 carro">
        <p id="text">Nous cherchons un freelance pour ...</p>
        <p id="text">Notre besoin porte principale sur...</p>
        <p id="text">Les compétence nécessaire sont... </p>
        <p id="text">Notre projet doit être terminées avant le... </p>
    </div>
    <div class="col-md-4 carr">
       <img  class="vector" style="width: 50px;height: 50px;"src="{{asset('assets/images/Vector.png')}}" alt="">
        <p class="msg">Recever au moins 12 devis en détaillant votre projet</p>
    </div>
    <div class="container-fluid footer">
        <div class="row foot">
            <a class="col-md-6"  href="step1" style="color: #009EE2;font-family:ubuntu;font-size:20px;font-style:normal;font-weight:400;">Retour</a>
       <a id="but"href="step3" class="col-md-6 btn btn-primary"> Continuer </a>
        </div>
    </div>
</body>
</html>
