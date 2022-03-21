<!DOCTYPE html>
<html lang="it">
    <head>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <link id="css_link" rel="stylesheet" type="text/css" href="../css/styleSmartphone.css" />
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
            <meta name="viewport" content="width=device-width, initial-scale=1" />
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
            <script
              src="https://code.jquery.com/jquery-3.4.1.min.js"
              integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
              crossorigin="anonymous"></script>
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js" type="text/javascript"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script src="https://kit.fontawesome.com/c62994c39a.js" crossorigin="anonymous"></script>
            
        <title>ReBurger</title>
    </head>
<body class="bg-dark">      
<div id="cb-cookie-banner" class=" alert alert-warning fade show  text-center mb-0" role="alert" >
          🍪  Questo sito web utilizza i cookie per assicurarti di ottenere la migliore esperienza sul nostro sito web. <br>
          <a href="https://www.garanteprivacy.it/faq/cookie" target="blank">Ulteriori informazioni</a>
          <button type="button" class="btn btn-primary btn-sm ms-3" onclick="window.cb_hideCookieBanner()"> Accetto! </button>
         <div class=" d-flex justify-content-end">
            <button type="button" class="btn-close" data-bs-dismiss="alert"  aria-label="Close"></button>
         </div>
</div>                 
 <header class="bg-dark text-white d-block">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="col-12 container-fluid justify-content-sm-center">
    <img class="col justify-content-lg-start overflow-hidden" src="../img/Logo2.png" alt="ReBurger Logo" onclick='window.location="base.php"'/>
    <button class="col navbar-toggler ms-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="container-mb col-5 collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="col-12 navbar-nav text-center"style="font-size:4vw;">
        <li class="nav-item col-sm-3">
          <a class="nav-link" href="../template/base.php">Home</a>
        </li>
        <li class="nav-item col-sm-3 ">
          <a class="nav-link" href="../template/prodotti.php">Prodotti</a>
        </li>
        <li class="nav-item col-sm-3">
          <a class="nav-link" href="#">Carrello</a>
        </li>   
        <li class="nav-item col-sm-3">
          <a class="nav-link" href="../template/contatti.php">About</a>
        </li>  
      </ul>
    </div>
    <div class="container text-lg-center text-sm-end col  d-none d-md-block">
          <button type="button" class="btn btn-outline-light" onclick='window.location="login.php"'>Login</button>
          <button type="button" class="btn btn-warning my-2" onclick='window.location="signup.php"'>Sign-up</button></div>
                 </div>
            </div>
      </div>
    </nav>   
</header>

<!-- fine contenitore hero2 -->
<main> 

</main>

<!-- Va creato un array associativo con tutti i nomi delle categorie, e tramite un foreach faccio creare il titolo categoria preciso.
nel mentre che non ho la funziona per visualizzare niente, posso modificare alcune informazioni.--> 

<div class="container-lg"> 


  <ol class="list-group">
  <!-- va inserito qui dentro il foreach con la creazione dinamica dei contenitori per le categorie--> 
  <li class="mt-3 bg-dark rounded-3 shadow-lg text-white list-group-item d-flex justify-content-center align-items-start">
      <div class="ms-2 me-auto" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" 
      aria-expanded="false" aria-controls="collapseWidthExample">
        <div class="fw-bold">Categoria 1</div>
       <p>Dettagli categoria</p> 
      </div>
      <span class="badge"><i class='mt-3 fas fa-hamburger fa-bounce' style='font-size:48px;color:rgb(247,193,68)'></i></span>
    </li>


    <li class="mt-3 rounded-5 shadow-lg bg-dark text-white list-group-item d-flex justify-content-between align-items-start">
      <div class="ms-2 me-auto">
        <div class="fw-bold">Categoria 2</div>
        <p>Dettagli categoria</p> 
      </div>
      <span class="badge bg-primary ">14</span>
    </li>
    <li class="mt-3 rounded-5 shadow-lg bg-dark text-white list-group-item d-flex justify-content-between align-items-start">
      <div class="ms-2 me-auto">
        <div class="fw-bold">Categoria 3</div>
        <p>Dettagli categoria</p> 
      </div>
      <span class="badge ">14</span>
    </li>
  </ol>
</div>

<!-- <div  id="card1">
  <div class="collapse collapse-horizontal" id="collapseWidthExample">
    <div class="card card-body" style="width: 300px;">
      This is some placeholder content for a horizontal collapse. It's hidden by default and shown when triggered.
    </div>
  </div>
</div> -->
<div class="col-12 col-sm-4 text-white px-4 py-5 collapse collapse-horizontal" id="collapseWidthExample" > 
    <div class="row row-cols-1 align-items-center g-4 py-5"> <!-- ho tolto row-cols-lg-3 che mi dava la forma a quadretto per la card. -->
      <div class="col">
        <div class="card card-cover overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="width:250px">
          <div class="d-flex flex-column text-center pb-3 text-white">
            <h2 class="pt-5 mb-4 display-1 text-center lh-1 fw-bold"><i class="fas fa-hamburger" style='font-size:48px;color:rgb(247,193,68)'></i></h2>
            <div class="d-flex flex-column display-5 fw-bold text-white text-shadow-1" >
             <p>CATEGORIA</p> 
            </div>
          <div class="text-white">
          <cite> Descrizione categoria </cite>
          <!--  Prendere il nome dell'utente venditore,
                visualizzarlo a video e inserici una breve didascalia-->
          </div>
          </div>
        </div>
      </div>
    </div>
  </div> 

<!-- Cards che contengono qualche nostra iniziativa -->
 <!-- <div class="container text-white px-4 py-5" id="custom-cards"> 
    <div class="row row-cols-1  align-items-stretch g-4 py-5">  ho tolto row-cols-lg-3 che mi dava la forma a quadretto per la card.
      <div class="col">
        <div class="card card-cover overflow-hidden text-white bg-dark rounded-5 shadow-lg">

          <div class="d-flex flex-column text-center pb-3 text-white">
            <h2 class="pt-5 mb-4 display-1 text-center lh-1 fw-bold"><i class="bi bi-shop"></i></h2>
            <div class="d-flex flex-column display-5 fw-bold text-white text-shadow-1" >
             <p>Nome Venditore</p> 
            </div>
          <div class="text-white">
          <cite> Descrizione </cite>
            Prendere il nome dell'utente venditore,
                visualizzarlo a video e inserici una breve didascalia
          </div>
                  
             
           
          </div>
        </div>
      </div> -->

      <!-- <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" ">  style="background-image: url('fotoacaso.jpg'); 
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Le nostre Bibite</h2>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
              aggiungi immagine  
              </li>
              <li class="d-flex align-items-center me-3">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                <small>Pakistan</small>
              </li>
              <li class="d-flex align-items-center">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                <small>4d</small>
              </li>
            </ul>
          </div>
        </div>
      </div> -->
      <!-- <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" ">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Finger Food</h2>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
              <i class="fa-duotone fa-french-fries"></i>
              </li>
              <li class="d-flex align-items-center me-3">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href=""></use></svg>
                <small>Cesena</small>
              </li>
              <li class="d-flex align-items-center">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
              </li>
            </ul>
          </div>
        </div>
      </div> -->
    </div>
  </div> 



<button class="btn position-fixed btn-outline-warning " onclick="goTop()" id="topBtn" title="Go top">↑</button>



<!-- Javascript-->
        <script src="../script/cookies.js"></script>
        <!-- <script src="../script/formLoginAnimation.js"></script>  -->
        <script src="../script/script.js"></script> 
    </body>
<!-- footer qui -->



<div class="container-md justify-content-center">
  <?php include 'footer.php'; ?>
</div>
</html>