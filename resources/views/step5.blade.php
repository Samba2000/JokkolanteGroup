<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
     <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@700&family=Ubuntu&display=swap" rel="stylesheet">
       <link href="{{asset('assets/images/logo.ico')}}" rel="icon">

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
  <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
</div>
  <h2 class="w-100 titre">Quels est votre budget ?</h2>
        <div class="col-md-6 vers">
        <h4>Budget approximatif </h4>
        </div>
    <div class="col-md-4 budget">
        <p class="row pay"> Moins de 350.000 Franc CFA </p>
    </div>
    <div class="col-md-4 budget">
        <p class="pay"> 350.000 à 650.000 Franc CFA </p>
    </div>
    <div class="col-md-4 budget">
        <p class="pay"> 650.000 à 6.250.000 Franc CFA </p>
    </div>
    <div class="col-md-4 budget">
        <p class="pay">6.250.000 Franc CFA</p>
    </div>

   <div class="col-md-4 car">
       <img  class="img-fluid vecto col-md-2" style="width: 50px;height: 50px;"src="{{asset('assets/images/Vectorer.png')}}" alt="">
        <p class="ms col-md-10 w-75 ">99% des clients trouvent des freelances dans leur budget</p>
    </div>
      <div class="container-fluid footer navbar-fixed-bottom">
        <div class="row foot">
            <a class="col-md-6"href="step4">Retour</a>
       <a id="but" href="step6"class="col-md-6 btn btn-primary"> Continuer </a>
        </div>
    </div>
</body>
</html>
