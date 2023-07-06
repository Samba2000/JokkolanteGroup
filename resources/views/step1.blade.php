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
      <link href="{{asset('assets/images/logo.ico')}}" rel="icon">

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
       <img src="assets/images/Mask.png">
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
  <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
  <h2 class="w-100 titre">Quel est votre besoin ?</h2>
        <div class="col-md-6 nbrprojet">
        <p> votre proget en quelque mots</p>
        <p> 0/70 </p>
        </div>
        <form class="col-md-6 form">
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" class="sr-only">Password</label>
    <input type="text" class="myinput" id="inputPassword2" placeholder="Ex:Site E-commerce,Application Android,Maquette graphique">
  </div>
</form>
<div class="row dans">
      <div class="col-md-4 carré">
      <div class="forn"></div>
      <h6 class="row faz">Recevez gratuitement des devis en</h6>
      <div class="row farz" >
      <h6>seulement 2 minutes</h6>
      <h5 >sur Jokkalante.sn</h5>
      </div>
      <div class="row farss" ><h6>premier platform </h6> <h5>de freelance en Afrique</h5></div>
      <div class="row farss" ><h6>Sans commission ,</h6> <h5>sans obligation</h5></div>
      <div class="row farss" ><h6>000 000</h6> <h5>freelances inscrits</h5></div>
    </div>
 <img class="img-fluid imge" src="{{asset('assets/images/onboarding.png')}}" alt="">
</div>

<div class="container-fluid footer navbar-fixed-bottom">
      <div class="row foot">
       <div class="col-md-8 ca">
        <span class="cir">
        <img class="img" src="{{asset('assets/images/Vecto.png')}}" alt="">
</span>
        <p> simple,rapide,et gratuit </p></div>
       <a id="but" href="step2" class=" col-md-4 btn btn-primary"> Continuer</a>
       </div>

</div>
</body>
</html>
