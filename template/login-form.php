 
<div class="text-center form-signin">
  <form action="" method="POST">
    <h1 class=" my-4 h3 mb-3 text-white fw-normal">Inserisci i tuoi dati per accedere</h1>
    <?php if(isset($templateParams["errorelogin"])):?>
      <p class="text-white"> <?php echo $templateParams["errorelogin"];?> </p>
      <?php endif; ?>
    <div class="form-floating d-flex">
      <input type="text" class="form-control" placeholder="nameExample" id="username" name="username" required/>
      <label for="username">Username</label>
    </div>
    <div class="form-floating d-flex">
      <input type="password" class="form-control" placeholder="Password" id="password" name="password" required/>
      <label for="password">Password</label>
    </div>

    <div class="container d-flex justify-content-center my-3 py-3">
       <div class="checkbox mb-3">
         <label class="text-white">
           <input type="checkbox" value="remember-me"> Ricordami
         </label>

         <button id="toggle-password" type="button" class="btn-sm btn-warning mx-4 d-none"><i id="eyeIcon" class="bi bi-eye-slash"></i></button>
       </div>
    </div>
  
    <button class="w-100 btn btn-lg btn-warning" type="submit" name="submit">Accedi</button>
  </form>
  <script src="script/showpwd.js"></script>
</div>
