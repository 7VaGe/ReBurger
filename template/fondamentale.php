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
         <div class=" d-flex justify-content-end">
            <button type="button" class="btn-close" data-bs-dismiss="alert"  aria-label="Close"></button>
         </div>
</div>
<header class="bg-dark text-white d-block">
<?php include 'header.php' ?>
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

<main>
  <?php
      if(isset($templateParams["nome"])){
          require($templateParams["nome"]);}?>
</main>


<button class="btn position-fixed btn-outline-warning " onclick="goTop()" id="topBtn" title="Go top">↑</button>



<!-- Javascript-->
        <script src="../script/cookies.js"></script>
        <!-- <script src="../script/formLoginAnimation.js"></script>  -->
        <script src="../script/script.js"></script>

<!-- footer qui -->



<div class="container-md justify-content-center">

<?php include 'footer.php' ?>
</div>
</body>
</html>
