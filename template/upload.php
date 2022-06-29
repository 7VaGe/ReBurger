<div class="text-center">
  <form action="profile.php" method="post" enctype="multipart/form-data">
    <div class="container-lg">
      <h1 class=" my-4 h3 mb-3 text-center text-white fw-normal">Benvenuto, ora puoi modificare il tuo profilo <?php echo strtolower($templateParams["utente"]["username"]); ?> : </h1>
      <div class="card bg-dark rounded-6 shadow-lg" >
        <img class="rounded-circle mx-auto d-block my-2 img-fluid" src='img/<?php echo $templateParams["utente"]["img"]?>' style="width: 200px; height:200px;"/>
        <div class="container col-lg-6 col-lg-offset-2">
        <div class="w-100 form-floating d-flex  mt-4">
          <input type="number" class="form-control my-2" id="idutente" value="<?php echo $templateParams["utente"]["idutente"] ?>" name="idutente" hidden/> <!-- oninvalid="this.setCustomValidity('cambia messaggio')" puoi cambiare il messaggio d'errore-->
      </div>
      <div class="w-100 form-floating d-flex  mt-4">
          <input type="text" class="form-control my-2" id="username" value="<?php echo $templateParams["utente"]["username"] ?>" name="username" /> 
          <label for="floatingInput">Nome utente</label>
      </div>
      <div class="w-100 form-floating d-flex ">
          <input type="email" class="form-control my-2" id="email" value="<?php echo $templateParams["utente"]["email"] ?>" name="email" /> 
          <label for="floatingInput">Email</label>
      </div>
      <div class="w-100 form-floating d-flex">
          <input type="password" class="form-control my-2" id="password" value="<?php echo $templateParams["utente"]["password"] ?>" name="password" /> 
          <label for="floatingInput">Password</label>
      </div>
     <div class="w-100 form-floating d-flex">
          <input type="file" class="form-control my-2" id="immagine" value="" name="immagine" />
          <label for="floatingInput">Immagine utente</label>
      </div>
      <div class="checkbox m-3">
          <button id="toggle-password" type="button" class="btn-sm btn-warning mx-4 d-none"><i id="eyeIcon"class="bi bi-eye-slash"></i>
          </div>
    <button class="w-50 btn btn-lg btn-warning m-3" type="submit"> Conferma modifiche <br> <i class="fa-solid fa-circle-check"></i></button>
      </div>
    </div>
  </form>
</div>
<button class="w-75 btn btn-lg btn-warning my-4"  onclick='window.location="login.php"'> <i class="fa-solid fa-circle-arrow-left"></i> Torna al tuo profilo</button>
</div>
  <script src="script/showpwd.js"></script>
