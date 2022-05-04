<div class="text-center form-signin">
  <form action="listaProdotti.php" method="get">
    <h1 class=" my-4 h3 mb-3 text-center text-white fw-normal">Modifica i campi del prodotto:</h1>
    <div class="container-lg">
      <?php foreach ($templateParams["prodotto"] as $prodotto):     ?>
      <div class="form-floating d-flex">
          <input type="text" class="form-control my-2" id="nome" value="<?php echo $prodotto["nome"] ?>" name="nome" /> <!-- oninvalid="this.setCustomValidity('cambia messaggio')" puoi cambiare il messaggio d'errore-->
          <label for="floatingInput">Nome</label>
      </div>
      <div class="form-floating d-flex">
          <input type="text" class="form-control my-2" id="descrizione" value="<?php echo $prodotto["descrizione"] ?>" name="descrizione" /> <!-- oninvalid="this.setCustomValidity('cambia messaggio')" puoi cambiare il messaggio d'errore-->
          <label for="floatingInput">Ingredienti</label>
      </div>
      <div class="form-floating d-flex">
          <input type="number" class="form-control my-2" id="categoria" value="<?php echo $prodotto["categoria"] ?>" name="categoria" /> <!-- oninvalid="this.setCustomValidity('cambia messaggio')" puoi cambiare il messaggio d'errore-->
          <label for="floatingInput">Categoria</label>
      </div>
      <div class="form-floating d-flex">
          <input type="number" class="form-control my-2" id="prezzo" value="<?php echo $prodotto["prezzo"] ?>" name="prezzo" /> <!-- oninvalid="this.setCustomValidity('cambia messaggio')" puoi cambiare il messaggio d'errore-->
          <label for="floatingInput">Prezzo</label>
      </div>
<?php endforeach;?>
    <button class="w-100 btn btn-lg btn-warning" type="submit">Modifica</button>
    </div>
  </form>
</div>
