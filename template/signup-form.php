<main class="text-center form-signin">
  <form>
    <h1 class=" my-4 h3 mb-3 text-center text-white fw-normal">Registrati compilando i seguenti campi:</h1>
    <div class="container-lg">
      <?php
            $userDataRegistration = ["Username"  => "text", "Password"=> "password", "Conferma Password"=> "password", "Email" => "email", "Telefono" => "tel", "Immagine"=> "file"];
            $msgDataInvalid =["testo" => "Riempi questo campo", "password" => "Inserisci almeno 8 caratteri, tra cui un carattere speciale, un numero e una lettera maiuscola", "tel"=> "Inserisci un numero valido di 10 cifre"];
            foreach ($userDataRegistration as $data => $type):
     ?>
      <div class="form-floating d-flex">
          <input type="<?php echo $type?>" class="form-control my-2" id="floatingInput<?php echo $data?>" placeholder="nameExample" required/> <!-- oninvalid="this.setCustomValidity('cambia messaggio')" puoi cambiare il messaggio d'errore-->
          <label for="floatingInput"><?= $data?></label>
      </div>
<?php endforeach;?>
      <div class="container d-flex justify-content-center my-3 py-3">
        <div class="checkbox mb-3">
          <button id="toggle-password" type="button" class="btn-sm btn-warning mx-4 d-none"><i id="eyeIcon"class="bi bi-eye-slash"></i>
          </div>
        </div>
    <button class="w-100 btn btn-lg btn-warning" type="submit">Registrati</button>
    <button class="w-100 my-2 btn-lg btn-outline-primary" type="submit" onclick='window.location="login.php"'>Hai già un account? Entra!</button>
    </div>
  </form>
</main>
