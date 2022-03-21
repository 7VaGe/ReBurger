

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
<header class="bg-dark text-white d-md-none d-lg-none d-xl-block d-s-none">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="col-12 container-fluid">
    <img class="col-4 justify-content-lg-start" src="../img/Logo2.png" alt="ReBurger Logo" onclick='window.location="base.php"'/>
    <button class="col-2 navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="container-mb justify-content-center col-5 collapse navbar-collapse" id="collapsibleNavbar">
      <ul class=" col-12 navbar-nav text-center display-5">
        <li class="nav-item col-3">
          <a class="nav-link" href="../template/base.php">Home</a>
        </li>
        <li class="nav-item col-3">
          <a class="nav-link" href="../template/prodotti.php">Prodotti</a>
        </li>
        <li class="nav-item col-3">
          <a class="nav-link" href="#">Carrello</a>
        </li>   
        <li class="nav-item col-3">
        <a class="nav-link" href="../template/contatti.php">About</a>
        </li>  
      </ul>
    </div>
                 </div>
            </div>
      </div>
    </nav>   
</header>

<main class="text-center form-signin">
  <form>
  <img class="my-5 mb-4 d-xl-none" src="../img/Logo2.png" onclick='window.location="base.php"' alt="" width="280" height="150"/>
    <h1 class=" my-4 h3 mb-3 text-center text-white fw-normal">Registrati compilando i seguenti campi:</h1>
    <div class="container-lg">
      <?php 
            $userDataRegistration = ["Username"  => "text", "Password"=> "password", "Conferma Password"=> "password", "Email" => "email", "Telefono" => "tel", "Immagine"=> "file"]; 
            $msgDataInvalid =["testo" => "Riempi questo campo", "password" => "Inserisci almeno 8 caratteri, tra cui un carattere speciale, un numero e una lettera maiuscola", "tel"=> "Inserisci un numero valido di 10 cifre"];
            foreach ($userDataRegistration as $data => $type):
     ?>
  <div class="form-floating d-flex">
          <input type="<?=$type?>" class="form-control my-2" id="floatingInput<?= $data?>" placeholder="nameExample" required/> <!-- oninvalid="this.setCustomValidity('cambia messaggio')" puoi cambiare il messaggio d'errore-->
          <label for="floatingInput"><?= $data?></label>
  </div>
<?php endforeach;?>  
    <div class="container d-flex justify-content-center my-3 py-3">
       <div class="checkbox mb-3">
      <label class="text-white">
        <input type="checkbox" value="remember-me"> Ricordami
      </label>

      <button id="toggle-password" type="button" class="btn-sm btn-warning mx-4 d-none"><i id="eyeIcon"class="bi bi-eye-slash"></i>
    </div>
    </div>
   
    <button class="w-100 btn btn-lg btn-warning" type="submit">Accedi</button>
    <button class="w-100 my-2 btn-lg btn-outline-primary" type="submit" onclick='window.location="login.php"'>Hai già un account? Entra!</button>
    
    </form> 
  </main>
  </div>
</div>

  <button class="btn position-fixed btn-outline-warning" onclick="goTop()" id="topBtn" title="Go top">↑</button>


<!-- Javascript-->
        <script src="../script/cookies.js"></script>

        <script src="../script/script.js"></script> 
        <script src="../script/utilities.js"></script> 
        <script src="../script/showpwd.js"></script>
    </body>
<!-- footer qui -->
<div class="container-md justify-content-center">

<?php include 'footer.php';?>
   <!-- <footer class="py-5 m-4 text-center text-white">
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
  </footer>  -->
</div>
</html>