<div class="text-center form-signin">
  <form action="contatti.php" method="get">
    <h1 class=" my-4 h3 mb-3 text-center text-white fw-normal">Registrati compilando i seguenti campi:</h1>
    <div class="container-lg">
      <?php foreach ($templateParams["info"] as $info):     ?>
      <div class="form-floating d-flex">
          <input type="text" class="form-control my-2" id="indirizzo" value="<?php echo $info["indirizzo"] ?>" name="indirizzo" /> <!-- oninvalid="this.setCustomValidity('cambia messaggio')" puoi cambiare il messaggio d'errore-->
          <label for="floatingInput">Indirizzo</label>
      </div>
      <div class="form-floating d-flex">
          <input type="text" class="form-control my-2" id="descrizione" value="<?php echo $info["descrizione"] ?>" name="descrizione" /> <!-- oninvalid="this.setCustomValidity('cambia messaggio')" puoi cambiare il messaggio d'errore-->
          <label for="floatingInput">Indirizzo</label>
      </div>
      <div class="form-floating d-flex">
          <input type="text" class="form-control my-2" id="nome_locale" value="<?php echo $info["nome"] ?>" name="nome_locale" /> <!-- oninvalid="this.setCustomValidity('cambia messaggio')" puoi cambiare il messaggio d'errore-->
          <label for="floatingInput">Nome</label>
      </div>
<?php endforeach;?>
    <button class="w-100 btn btn-lg btn-warning" type="submit">Modifica</button>
    </div>
  </form>
</div>
