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
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script src="https://kit.fontawesome.com/c62994c39a.js" crossorigin="anonymous"></script>

        <title>ReBurger</title>
    </head>
<body class="bg-dark">
<div id="cb-cookie-banner" class=" alert alert-warning fade show  text-center mb-0" role="alert" >
          🍪  Questo sito web utilizza i cookie per assicurarti di ottenere la migliore esperienza sul nostro sito web. <br>
          <a href="https://www.garanteprivacy.it/faq/cookie" target="blank">Ulteriori informazioni</a>
          <button type="button" class="btn btn-primary btn-sm ms-3" onclick="window.cb_hideCookieBanner()"> Accetto! </button>
         <div class=" d-flex align-items-start">
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
    <ul class="col-12 navbar-nav text-center" style="font-size:4vw;">
        <li class="nav-item col-sm-3">
          <a class="nav-link" href="../template/base.php">Home</a>
        </li>
        <li class="nav-item col-sm-3 ">
          <a class="nav-link" href="#">Prodotti</a>
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
  </nav>
</header>
<div class="container-lg col-12 my-2 d-lg-none d-sm-block bg-dark">
    <div class="row mx-4 p-2 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3">
      <div class="col-lg-7 p-1 p-lg-5 pt-lg-3">
              <!-- <div class="d-grid gap-2 d-md-flex justify-content-md-start ">
                    <button type="button" class="btn btn-warning">Ordina ora</button>
              </div> -->
          <div class="py-5 text-center col-12 d-grid gap-2 d-md-flex justify-content-md-center d-md-none">
          <button type="button" class="btn btn-outline-light" onclick='window.location="login.php"'>Login</button>
          <button type="button" class="btn btn-warning" onclick='window.location="signup.php"'>Sign-up</button></div>
        </div>
     </div>
</div>
<div class="album py-5 bg-light">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

        <div class="col">
          <div class="card shadow-sm">
            <img  src="../img/ham.png"  width="100%" height="225" alt=""/><title>Prodotto</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>

            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Ordina</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



<button class="btn position-fixed btn-outline-warning " onclick="goTop()" id="topBtn" title="Go top">↑</button>



<!-- Javascript-->
        <script src="../script/cookies.js"></script>
        <!-- <script src="../script/formLoginAnimation.js"></script>  -->
        <script src="../script/script.js"></script>

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
    </div>

  </footer>
</div>
    </body>
</html>
