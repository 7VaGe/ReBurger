<!DOCTYPE html>
<html lang="it">
    <head>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <link id="css_link" rel="stylesheet" type="text/css" href="../css/styleSmartphone.css" />
            <meta name="viewport" content="width=device-width, initial-scale=1" />
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
            <script
              src="https://code.jquery.com/jquery-3.4.1.min.js"
              integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
              crossorigin="anonymous"></script>
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js" type="text/javascript"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <title>ReBurger</title>
    </head>
<body>      
<div id="cb-cookie-banner" class=" alert alert-warning fade show  text-center mb-0" role="alert" >
          🍪  Questo sito web utilizza i cookie per assicurarti di ottenere la migliore esperienza sul nostro sito web. <br>
          <a href="https://www.garanteprivacy.it/faq/cookie" target="blank">Ulteriori informazioni</a>
          <button type="button" class="btn btn-primary btn-sm ms-3" onclick="window.cb_hideCookieBanner()"> Accetto! </button>
         <div class=" d-flex justify-content-end">
            <button type="button" class="btn-close" data-bs-dismiss="alert"  aria-label="Close"></button>
         </div>
</div>                 
 <header class="bg-dark text-white">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="col-12 container-fluid">
    <img class="col-5 justify-content-lg-start" src="../img/Logo2.png" alt="ReBurger Logo" onclick='window.location="base.php"'/>
    <button class="col-2 navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="container-mb justify-content-center col-4 collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav text-center">
        <li class="nav-item ">
          <a class="nav-link" href="../template/base.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>  
        <li class="nav-item">
          <a class="nav-link" href="#">FAQs</a>
        </li>  
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>  
      </ul>
    </div>
    <div class="container text-center col-3  d-none d-md-block d-lg-inline-block ">
          <button type="button" class="btn btn-outline-light" onclick='window.location="login.php"'>Login</button>
          <button type="button" class="btn btn-warning">Sign-up</button></div>
                 </div>
            </div>
      </div>
    </nav>   
</header>
<!-- con il php facciamo ggenerare vari pannelli in automatico in base agli articoli che vogliamo fare visualizzare presi dal db -->
  <div class="container-md my-5">
    <div class="row mx-4 p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
      <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
        <h1 class="display-4 fw-bold lh-1">Scopri il nostro menu e ordina ora!</h1>
        <p class="lead"> 
            <cite>L’innovazione deve essere parte della nostra cultura. <br> I consumatori si stanno trasformando più velocemente di noi, e se non teniamo il passo siamo nei guai.<br></cite>
                <b> Ian Schafer</b></p>
              <div class="d-grid gap-2 d-md-flex justify-content-md-start ">
                    <button type="button" class="btn btn-warning">Ordina ora</button>
              </div>
        </div>
     </div>
</div> <!-- fine contenitore card -->
 <div class="container-md my-5">
    <div class="row mx-4 p-4 pb-auto pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
      <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
        <h1 class="display-4 fw-bold lh-1">Card numero 2</h1>
        <p class="lead"> 
            <cite>Descrizione card numero 2<br></cite>
                <b> autore</b></p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start ">
            <button type="button" class="btn btn-warning">About us</button> 
         </div>
     </div>
         <div class="col-lg-4 p-2 text-center overflow-hidden shadow-lg">
          <img  src="../img/hamburger.png" alt=""/>
</div>
</div>
</div>
<button class="btn position-fixed btn-outline-warning " onclick="goTop()" id="topBtn" title="Go top">↑</button>
<!-- Javascript-->
        <script src="../script/cookies.js"></script>
        <script src="../script/buttons.js"></script> 
        <script src="../script/script.js"></script> 
    </body>
<!-- footer qui -->
<div class="container-md justify-content-center">
  <footer class="py-5 m-4 text-center text-white">
        <div class="row">    
          <div class="col-6">
            <h5>Uno sguardo al ristorante</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Categorie</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Prodotti</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Carrello</a></li>
            </ul>
          </div>
          <div class="col-6">
            <h5>Di più sul nostro conto</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Chi siamo</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Contatti</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
            </ul>
          </div>
          <div class="col-12 py-4">
            <form class="justify-content-center">
              <h5>Iscriviti alla nostra newsletter</h5>
              <p>Riepilogo mensile delle nostre offerte e del panino del mese.</p>
              <div class="d-flex w-100 gap-2">
                <label for="newsletter1" class="visually-hidden">Indirizzo email</label>
                <input id="newsletter1" type="text" class="form-control" placeholder="Indirizzo Email ">
                <button class="btn btn-warning" type="button">Iscriviti</button>
              </div>
            </form>
          </div>
        <div class="col-12 d-block py-1 my-4 border-top">
          <p class="text-center">© 2022 Società, Inc. Tutti i diritti riservati.</p>
    </div>
        <div class="d-flex justify-content-center py-1 px-2 my-3">
          <ul class="list-unstyled d-flex text-white">
            <li class="ms-3"><a class="link-warning" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
            <li class="ms-3"><a class="link-warning" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
            <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
          </ul>
    </div>
  </footer>
</div>
</html>