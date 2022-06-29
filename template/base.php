<!DOCTYPE html>
<html lang="it">
    <head>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <link rel="stylesheet" href="css/styleSmartphone.css"><!--<link id="css_link" rel="stylesheet" type="text/css" href="css/styleSmartphone.css" /> -->
            <!--
            il percorso cambia se si utilizza mac os o windows, mac necessita di accedere alla cartella padre
            "../path" window invece entra direttamente. -->
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
<?php include 'cookie.php'; ?>
<header class="bg-dark text-white d-block">
<?php include 'header.php'; ?>
</header>
    <div class="row mx-4 p-2 pb-0 pe-lg-0 pt-lg-5 justify-content-md-center rounded-3">
      <div class="py-5 text-center col-12 d-grid gap-2 d-md-flex justify-content-md-center d-md-none" id="bottoniLog">
        <?php if (isset($_SESSION["username"])) { ?>
          <button type="button" class="btn btn-outline-light" onclick='window.location="index.php?logout=1"'>LOGOUT</button>
        <?php }else{ ?>
            <button type="button" class="btn btn-outline-light" onclick='window.location="login.php"'>Login</button>
            <button type="button" class="btn btn-warning" onclick='window.location="signup.php"'>Sign-up</button>
            <?php } ?>
    </div>
</div>

<main>
  <?php
      if(isset($templateParams["nome"])){
          require($templateParams["nome"]);}
  ?>
</main>

<div>
  <button class="btn position-fixed btn-outline-warning " onclick="goTop()" id="topBtn" title="Go top"><i class="bi bi-arrow-up"></i></button>
<button class="btn position-fixed btn-warning" id="cartIcon" title="ct"><i class="fa-solid fa-cart-plus"></i></button>
</div>




<!-- Javascript-->
  <script src="script/script.js"></script>

<!-- footer qui -->

<div class="container-md justify-content-center">

<?php include 'footer.php' ?>
</div>
</body>

</html>
