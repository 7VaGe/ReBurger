<?php
$nameErr = $prezzoErr = $imgError = $descErr = $categErr = "";
$controlloErr = 0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["nomeProdotto"])) {
    $nameErr = "Inserisci un nome per il prodotto ";
    $controlloErr = 1;
  } else {
    $presente = $dbh->checkNomeProdotto($_POST["nomeProdotto"]);
    if ($presente!= false) {
      $nameErr = "Questo nome prodotto è gia in uso";
      $controlloErr = 1;
    }
  }

  if (empty($_POST["prezzo"])) {
    $prezzoErr = "Inserisci il prezzo";
    $controlloErr = 1;
  }

  if (empty($_POST["desc"])) {
    $descErr = "Per favore inserisci la lista degli ingredienti o una breve descrizione";
    $controlloErr = 1;
  }

  if (empty($_POST["categ"])) {
    $categErr = "Definisci una categoria di appartenenza";
    $controlloErr = 1;
    if ($_POST["categ"]>=5)
      $categErr = "Immetti un numero tra 1-4 per selezionare la categoria";
  }

if ($controlloErr == 0) {
    $_POST["venditore"]=1;
    $indice = $dbh->insertProdotto($_POST["venditore"], str_replace(' ', '_', $_POST["nomeProdotto"]), $_POST["desc"], $_POST["categ"], $_POST["prezzo"]);
    $dbh->uploadImmagine($indice, "prodotto");
    $_FILES["immagine"]== NULL;
     ?>
    <div class="container-lg my-5">
      <div class="row mx-4 p-4 pb-auto pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg bg-white">
        <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
          <h1 class="display-4 fw-bold lh-1"><?php echo $_POST["nomeProdotto"] ?></h1>
          <p class="lead">
            <cite>Hai inserito il prodotto con successo</cite>
          </p>
          <div class="d-grid gap-2 d-md-flex justify-content-md-start ">
            <button type="button" class="btn btn-warning" onclick='window.location="listaProdotti.php"'>Torna alla lista dei prodotti</button>
          </div>
        </div>
      </div>
    </div>
<?php $_POST["nomeProdotto"]=NULL; $_POST["prezzo"]=NULL; $_POST["desc"]=NULL; $_POST["img"]=NULL; $_POST["categ"]=NULL; $_FILES["immagine"]=NULL;
}
}?>
<div class="text-center form-signin">
  <form action="" method="POST" enctype="multipart/form-data">
    <h1 class=" my-4 h3 mb-3 text-center text-white fw-normal">Compila i seguenti campi per aggiungere un prodotto:</h1>
    <div class="container-lg">
      <div class="form-floating d-flex">
          <input type="text" class="form-control my-2" id="nomeProdotto" name="nomeProdotto" /> <!-- oninvalid="this.setCustomValidity('cambia messaggio')" puoi cambiare il messaggio d'errore-->
          <label for="floatingInput">Nome</label>
          <span class="error" style="color:red"><?php echo $nameErr;?></span>
      </div>
      <div class="form-floating d-flex">
          <input type="text" class="form-control my-2" id="prezzo" name="prezzo" /> <!-- oninvalid="this.setCustomValidity('cambia messaggio')" puoi cambiare il messaggio d'errore-->
          <label for="floatingInput">Prezzo</label>
          <span class="error" style="color:red"><?php echo $prezzoErr;?></span>
      </div>
      <div class="form-floating d-flex">
          <input type="text" class="form-control my-2" id="desc" name="desc" /> <!-- oninvalid="this.setCustomValidity('cambia messaggio')" puoi cambiare il messaggio d'errore-->
          <label for="floatingInput">Descizione</label>
          <span class="error" style="color:red"><?php echo $descErr;?></span>
      </div>
      <div class="form-floating d-flex">
          <input type="text" class="form-control my-2" id="categ" name="categ" /> <!-- oninvalid="this.setCustomValidity('cambia messaggio')" puoi cambiare il messaggio d'errore-->
          <label for="floatingInput">Categoria</label>
          <span class="error" style="color:red"><?php echo $categErr;?></span>
      </div>
      <div class="form-floating d-flex">
          <input type="file" class="form-control my-2" id="immagine" name="immagine" /> <!-- oninvalid="this.setCustomValidity('cambia messaggio')" puoi cambiare il messaggio d'errore-->
          <label for="floatingInput">Immagine</label>
        </div>
    <button class="w-100 btn btn-lg btn-warning" type="submit">Inserisci</button>
    </div>
  </form>
</div>
