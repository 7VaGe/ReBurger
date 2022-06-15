<div class="text-center form-signin">
  <form action="contatti.php" method="get">
    <h1 class=" my-4 h3 mb-3 text-center text-white fw-normal">Modifica i seguenti argomenti: </h1>
    <div class="container-lg">
      <?php foreach ($templateParams["info"] as $info):     ?>
      <div class="form-floating d-flex">
          <input type="text" class="form-control my-2" id="indirizzo" value="<?php echo $info["indirizzo"] ?>" name="indirizzo" /> <!-- oninvalid="this.setCustomValidity('cambia messaggio')" puoi cambiare il messaggio d'errore-->
          <label for="floatingInput">Indirizzo</label>
      </div>
      <div class="form-floating d-flex">
          <input type="text" class="form-control my-2" id="descrizione" value="<?php echo $info["descrizione"] ?>" name="descrizione" /> <!-- oninvalid="this.setCustomValidity('cambia messaggio')" puoi cambiare il messaggio d'errore-->
          <label for="floatingInput">descrizione</label>
      </div>
      <div class="form-floating d-flex">
          <input type="text" class="form-control my-2" id="descrizione1" value="<?php echo $info["descrizione1"] ?>" name="descrizione1" /> <!-- oninvalid="this.setCustomValidity('cambia messaggio')" puoi cambiare il messaggio d'errore-->
          <label for="floatingInput">descrizione1</label>
      </div>
      <div class="form-floating d-flex">
          <input type="text" class="form-control my-2" id="descrizione2" value="<?php echo $info["descrizione2"] ?>" name="descrizione2" /> <!-- oninvalid="this.setCustomValidity('cambia messaggio')" puoi cambiare il messaggio d'errore-->
          <label for="floatingInput">descrizione2</label>
      </div>
      <div class="form-floating d-flex">
          <input type="text" class="form-control my-2" id="descrizione3" value="<?php echo $info["descrizione3"] ?>" name="descrizione3" /> <!-- oninvalid="this.setCustomValidity('cambia messaggio')" puoi cambiare il messaggio d'errore-->
          <label for="floatingInput">descrizione3</label>
      </div>
      <div class="form-floating d-flex">
          <input type="text" class="form-control my-2" id="nome_locale4" value="<?php echo $info["nome"] ?>" name="nome_locale" /> <!-- oninvalid="this.setCustomValidity('cambia messaggio')" puoi cambiare il messaggio d'errore-->
          <label for="floatingInput">Nome</label>
      </div>
<?php endforeach;?>
    <button class="w-100 btn btn-lg btn-warning mt-3" type="submit">Modifica</button>
    </div>
  </form>
</div>
