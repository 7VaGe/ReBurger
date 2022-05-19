<div class="text-center">
  <form action="profile.php" method="post">
   <?php foreach($templateParams["utente"] as $userInfo):     ?>
    <div class="container-lg">
      <h1 class=" my-4 h3 mb-3 text-center text-white fw-normal">Benvenuto, ora puoi modificare il tuo profilo <?php echo strtolower($userInfo["username"]); ?> : </h1> 
      <div class="card bg-dark rounded-6 shadow-lg" >
        <img class="rounded-circle mx-auto d-block my-2 img-fluid" src='img/<?php echo $userInfo["img"]?>' style="width: 200px; height:200px;"/>
        <div class="container col-lg-6 col-lg-offset-2">
        <div class="w-100 form-floating d-flex  mt-4">
          <input type="number" class="form-control my-2" id="idutente" value="<?php echo $userInfo["idutente"] ?>" name="idutente" hidden/> <!-- oninvalid="this.setCustomValidity('cambia messaggio')" puoi cambiare il messaggio d'errore-->
      </div>
      <div class="w-100 form-floating d-flex  mt-4">
          <input type="text" class="form-control my-2" id="username" value="<?php echo $userInfo["username"] ?>" name="username" /> <!-- oninvalid="this.setCustomValidity('cambia messaggio')" puoi cambiare il messaggio d'errore-->
          <label for="floatingInput">Nome utente</label>
      </div>
      <div class="w-100 form-floating d-flex ">
          <input type="email" class="form-control my-2" id="email" value="<?php echo $userInfo["email"] ?>" name="email" /> <!-- oninvalid="this.setCustomValidity('cambia messaggio')" puoi cambiare il messaggio d'errore-->
          <label for="floatingInput">Email</label>
      </div>
      <div class="w-100 form-floating d-flex">
          <input type="password" class="form-control my-2" id="password" value="<?php echo $userInfo["password"] ?>" name="password" /> <!-- oninvalid="this.setCustomValidity('cambia messaggio')" puoi cambiare il messaggio d'errore-->
          <label for="floatingInput">Password</label>
      </div>
      <div class="w-100 form-floating">
          <input type="password" class="form-control my-2" id="checkPwd" name="checkPwd" /> <!-- oninvalid="this.setCustomValidity('cambia messaggio')" puoi cambiare il messaggio d'errore-->
          <label for="floatingInput">Conferma Password</label>
          <button id="toggle-password" type="button" class="btn-sm btn-warning mx-4 d-none b-inline-block"><i id="eyeIcon" class="bi bi-eye-slash"></i></button>
      </div>
     <div class="w-100 form-floating d-flex">
          <input type="file" class="form-control my-2" id="img" accept="immagini/*" value="<?php echo $userInfo["img"] ?>"" name="img" />
          <label for="floatingInput">Immagine utente</label>
      </div>
<?php endforeach;?>
    <button class="w-50 btn btn-lg btn-warning m-4" type="submit"> Conferma modifiche <br> <i class="fa-solid fa-circle-check"></i></button>
    </div> 
     
     </div>

  </form>
</div>
<button class="w-75 btn btn-lg btn-warning my-4"  onclick='window.location="login.php"'> <i class="fa-solid fa-circle-arrow-left"></i> Torna al tuo profilo</button>
   </div>
  <script src="script/showpwd.js"></script>
