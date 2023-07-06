<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
   <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
     <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@700&family=Ubuntu&display=swap" rel="stylesheet">

    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/images/logo.ico')}}" rel="icon">

    <link href="{{asset('assets/css/laststep.css')}}" rel="stylesheet">
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
  <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
</div>
  <h2 class="w-100 titra">Booster votre recherche de freelance</h2>

  <div class="row">
        <h4 class="perle">Option disponibles pour trouver la perle rare</h4>
</div>


  <div class=" col-md-6 card">
     <div class="cad">
      <div class="ga">  <p class="anno"> Attirez les meilleurs</p>
         <span id="badg"class="badge text-bg-danger" style="background-color:#EB1566;color:#fff;border-radius:20px;">PREMINIUM</span></div>
         <div class="dr">
            <h6 style="color: black;">30.000 Franc CFA </h6>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault"></label>
                </div>
        </div>
      </div>
      <hr id="var">
     <p class="msgl">Projet mise en avant sur la plateforme et remonté pendant 5 jours en haut des listes de projets.</p>
 </div>
 <div class=" col-md-6 card">
   <div class="cad">
    <div class="ga">  <p class="anno">Trouver rapidement</p>
       <span id="badg" style="background-color:#FF4040;color:#fff;border-radius:20px;"class="badge">URGENT</span></div>
       <div class="dr">
          <h6 style="color: black;">3.000 Franc CFA </h6>
              <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault"></label>
              </div>
      </div>
    </div>
    <hr id="var">
   <p class="msgl">Ajouter un label "Urgent" sur votre projet pour recevoir des devis plus rapidement.</p>
</div>
<div class=" col-md-6 card">

   <div class="cad">
    <div class="ga">  <p class="anna"> Restez discret</p>
       <span id="badg"class="badge text-bg-dark" style="background-color:black;color:#fff;border-radius:20px;">Cache</span></div>
       <div class="dr">
          <h6 style="color: black;">9.000 Franc CFA </h6>
              <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault"></label>
              </div>
      </div>
    </div>
    <hr id="var">
   <p class="msgl">Projet accessible uniquement par nos freelances abonnés et invisible sur Google.</p>
</div>
<div class="container-fluid footer">
        <div class="row foot">
            <a class="col-md-6"href="step7">Retour</a>
            <a id="but" href="laststep"class="col-md-6 btn btn-primary"> Continuer </a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
