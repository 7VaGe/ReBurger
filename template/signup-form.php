<?php
$nameErr = $emailErr = $imgError = $passErr = $telErr = "";
$controlloErr = 0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $nameErr = "Inserisci un Username";
    $controlloErr = 1;
  } else {
    $presente = $dbh->checkNomeUtente($_POST["username"]);
    if ($presente!= false) {
      $nameErr = "Questo nome utente è gia usato";
      $controlloErr = 1;
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
    $controlloErr = 1;
  } else {
    $presente = $dbh->checkEmailUtente($_POST["email"]);
    if ($presente!= false){
      $emailErr = "Questa email è gia usato";
      $controlloErr = 1;
    }
  }

  if (empty($_POST["password"])) {
    $passErr = "Immetti una password";
    $controlloErr = 1;
  }

  if (empty($_POST["tel"])) {
    $telErr = "Immetti un numero di telefono";
    $controlloErr = 1;
  }
if ($controlloErr == 0) {
    $indice = $dbh->insertUtente($_POST["username"], $_POST["password"], $_POST["email"], $_POST["tel"]);
    $dbh->uploadImmagine($indice, "utente");
    $_FILES["immagine"]= NULL;
     ?>
    <div class="container-lg my-5">
      <div class="row mx-4 p-4 pb-auto pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg bg-white">
        <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
          <h1 class="display-4 fw-bold lh-1"><?php echo $_POST["username"] ?></h1>
          <p class="lead">
            <cite>Hai effettuato la registrazione con successo</cite>
          </p>
          <div class="d-grid gap-2 d-md-flex justify-content-md-start ">
            <button type="button" class="btn btn-warning" onclick='window.location="login.php"'>Accedi per la prima volta</button>
          </div>
        </div>
      </div>
    </div>
<?php $_POST["username"]=NULL; $_POST["password"]=NULL; $_POST["email"]=NULL; $_POST["tel"]=NULL;
}
}?>
<div class="text-center form-signin">
  <form action="" method="post" enctype="multipart/form-data">
    <h1 class=" my-4 h3 mb-3 text-center text-white fw-normal">Registrati compilando i seguenti campi:</h1>
    <div class="container-lg">
      <div class="form-floating d-flex">
          <input type="text" class="form-control my-2" id="username" name="username" /> <!-- oninvalid="this.setCustomValidity('cambia messaggio')" puoi cambiare il messaggio d'errore-->
          <label for="floatingInput">Username</label>
          <span class="error" style="color:red"><?php echo $nameErr;?></span>
      </div>
      <div class="form-floating d-flex">
          <input type="password" class="form-control my-2" id="password" name="password" /> <!-- oninvalid="this.setCustomValidity('cambia messaggio')" puoi cambiare il messaggio d'errore-->
          <label for="floatingInput">Password</label>
          <span class="error" style="color:red"><?php echo $passErr;?></span>
      </div>
      <div class="form-floating d-flex">
          <input type="email" class="form-control my-2" id="email" name="email" /> <!-- oninvalid="this.setCustomValidity('cambia messaggio')" puoi cambiare il messaggio d'errore-->
          <label for="floatingInput">Email</label>
          <span class="error" style="color:red"><?php echo $emailErr;?></span>
      </div>
      <div class="form-floating d-flex">
          <input type="tel" class="form-control my-2" id="tel" name="tel" /> <!-- oninvalid="this.setCustomValidity('cambia messaggio')" puoi cambiare il messaggio d'errore-->
          <label for="floatingInput">Telefono</label>
          <span class="error" style="color:red"><?php echo $telErr;?></span>
      </div>
      <div class="form-floating d-flex">
          <input type="file" class="form-control my-2" id="immagine" name="immagine" /> <!-- oninvalid="this.setCustomValidity('cambia messaggio')" puoi cambiare il messaggio d'errore-->
          <label for="floatingInput">Immagine</label>
        </div>
      <div class="container d-flex justify-content-center my-3 py-3">
        <div class="checkbox mb-3">
          <button id="toggle-password" type="button" class="btn-sm btn-warning mx-4 d-none"><i id="eyeIcon"class="bi bi-eye-slash"></i>
          </div>
        </div>
    <button class="w-100 btn btn-lg btn-warning" type="submit">Registrati</button>
    <button class="w-100 my-2 btn-lg btn-outline-primary" onclick='window.location="login.php"'>Hai già un account? Entra!</button>
    </div>
  </form>
</div>
