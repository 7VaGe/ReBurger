<div class="text-center form-signin">
  <form action="listaProdotti.php" method="post" enctype="multipart/form-data">
    <h1 class=" my-4 display-5 mb-3 text-center text-white fw-normal">Modifica i campi del prodotto:</h1>
    <div class="container-lg">
      <div class="form-floating d-flex">
          <input type="text" class="form-control my-2" id="idprodotto" value="<?php echo $templateParams["prodotto"]["idprodotto"] ?>" name="idprodotto" hidden />
      </div>
      <div class="form-floating d-flex">
          <input type="text" class="form-control my-2" id="nome" value="<?php echo $templateParams["prodotto"]["nome"] ?>" name="nome" /> <!-- oninvalid="this.setCustomValidity('cambia messaggio')" puoi cambiare il messaggio d'errore-->
          <label for="floatingInput">Nome</label>
      </div>
      <div class="form-floating d-flex">
          <input type="text" class="form-control my-2" id="descrizione" value="<?php echo $templateParams["prodotto"]["descrizione"] ?>" name="descrizione" /> <!-- oninvalid="this.setCustomValidity('cambia messaggio')" puoi cambiare il messaggio d'errore-->
          <label for="floatingInput">Ingredienti</label>
      </div>
      <div class="form-floating d-flex">
          <input type="number" class="form-control my-2" id="categoria" value="<?php echo $templateParams["prodotto"]["categoria"] ?>" name="categoria" /> <!-- oninvalid="this.setCustomValidity('cambia messaggio')" puoi cambiare il messaggio d'errore-->
          <label for="floatingInput">Categoria</label>
      </div>
      <div class="form-floating d-flex">
          <input type="number" class="form-control my-2" id="prezzo" value="<?php echo $templateParams["prodotto"]["prezzo"] ?>" name="prezzo" /> <!-- oninvalid="this.setCustomValidity('cambia messaggio')" puoi cambiare il messaggio d'errore-->
          <label for="floatingInput">Prezzo</label>
      </div>

      <div class="form-floating d-flex">
          <input type="file" class="form-control my-2" id="immagine" placeholder="nameExample" name="immagine" /> <!-- oninvalid="this.setCustomValidity('cambia messaggio')" puoi cambiare il messaggio d'errore-->
          <label for="floatingInput">Immagine</label>
      </div>
    <button class="w-100 mt-2 btn btn-lg btn-warning" type="submit">Modifica</button>
    </div>
  </form>
  <button class="w-75 mt-3 btn btn-lg btn-danger" value="<?php echo $templateParams["prodotto"]["idprodotto"]?>" onclick="eliminaProdotto(this.value);">Rimuovi</button>
</div>



<script>
function eliminaProdotto(val) {
  if (confirm("Sei sicuro di voler rimuove questo prodotto dal tuo menù ?") == true) {
    window.location="listaProdotti.php?elimina=1&prodotto="+val;
  }else {

  }
}
</script>
