
<div class="text-center form-signin">
  <form action="profile.php" method="POST">
   <?php foreach($templateParams["utente"] as $userInfo):     ?>
    <h1 class=" my-4 h3 mb-3 text-center text-white fw-normal">Benvenuto, ora puoi modificare il tuo profilo <?php echo strtolower($userInfo["username"]); ?> : </h1>
    <div class="container-lg">
      <div class="form-floating d-flex">
          <input type="text" class="form-control my-2" id="username" value="<?php echo $userInfo["username"] ?>" name="username" /> <!-- oninvalid="this.setCustomValidity('cambia messaggio')" puoi cambiare il messaggio d'errore-->
          <label for="floatingInput">Nome utente</label>
      </div>
      <div class="form-floating d-flex">
          <input type="email" class="form-control my-2" id="email" value="<?php echo $userInfo["email"] ?>" name="email" /> <!-- oninvalid="this.setCustomValidity('cambia messaggio')" puoi cambiare il messaggio d'errore-->
          <label for="floatingInput">Email</label>
      </div>
      <div class="form-floating d-flex">
          <input type="password" class="form-control my-2" id="password" value="<?php echo $userInfo["password"] ?>" name="password" /> <!-- oninvalid="this.setCustomValidity('cambia messaggio')" puoi cambiare il messaggio d'errore-->
          <label for="floatingInput">Password</label>
      </div>
      <div class="form-floating">
          <input type="password" class="form-control my-2" id="checkPwd" value="<?php echo $userInfo["password"] ?>" name="password" /> <!-- oninvalid="this.setCustomValidity('cambia messaggio')" puoi cambiare il messaggio d'errore-->
          <label for="floatingInput">Conferma Password</label>
          <button id="toggle-password" type="button" class="btn-sm btn-warning mx-4 d-none b-inline-block"><i id="eyeIcon" class="bi bi-eye-slash"></i></button>
      </div>
     <!-- <div class="form-floating d-flex">
          <input type="file" class="form-control my-2" id="img" accept="immmagini/*" value=" echo $userInfo["img"] ?>" name="img" /> <!-- oninvalid="this.setCustomValidity('cambia messaggio')" puoi cambiare il messaggio d'errore
          <label for="floatingInput">Immagine utente</label>
      </div>-->
     ;
<?php  var_dump($_POST);
endforeach;?>
    <button class="w-100 btn btn-lg btn-warning" type="submit"> Conferma modifiche <i class="fa-solid fa-circle-check"></i></button>
    </div>
  </form>
  <script src="script/showpwd.js"></script>
</div>


