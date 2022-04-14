<?php if (isset($_GET["Username"]) && isset($_GET["Password"]) && isset($_GET["Email"]) && isset($_GET["Telefono"])) {
    $dbh->insertUtente($_GET["Username"], $_GET["Password"], $_GET["Email"], $_GET["Telefono"]);
     ?>
    <div class="container-lg my-5">
      <div class="row mx-4 p-4 pb-auto pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg bg-white">
        <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
          <h1 class="display-4 fw-bold lh-1"><?php echo $_GET["Username"] ?></h1>
          <p class="lead">
            <cite>Hai effettuato la registrazione con successo</cite>
          </p>
          <div class="d-grid gap-2 d-md-flex justify-content-md-start ">
            <button href="login" type="button" class="btn btn-warning">Accedi per la prima volta</button>
          </div>
        </div>
      </div>
    </div>
<?php $_GET["username"]=NULL; $_GET["password"]=NULL; $_GET["email"]=NULL; $_GET["tel"]=NULL;
}else{ ?>
<div class="text-center form-signin">
  <form action="" method="get">
    <h1 class=" my-4 h3 mb-3 text-center text-white fw-normal">Registrati compilando i seguenti campi:</h1>
    <div class="container-lg">
      <?php
    $userDataRegistration = ["Username"  => "username", "Password"=> "password", /*"Conferma Password"=> "password",*/ "Email" => "email", "Telefono" => "tel"/*, "Immagine"=> "file"*/];
            $msgDataInvalid =["username" => "Riempi questo campo", "password" => "Inserisci almeno 8 caratteri, tra cui un carattere speciale, un numero e una lettera maiuscola", "tel"=> "Inserisci un numero valido di 10 cifre"];
            foreach ($userDataRegistration as $data => $type):
     ?>
      <div class="form-floating d-flex">
          <input type="<?php echo $type?>" class="form-control my-2" id="<?php echo $data?>" placeholder="nameExample" /> <!-- oninvalid="this.setCustomValidity('cambia messaggio')" puoi cambiare il messaggio d'errore-->
          <label for="floatingInput"><?php echo $data?></label>
      </div>
<?php endforeach;?>
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
<?php } ?>
