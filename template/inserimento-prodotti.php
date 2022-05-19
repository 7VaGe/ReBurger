<?php if (isset($_POST["nomeProdotto"]) and isset($_POST["prezzo"]) and isset($_POST["desc"]) and isset($_POST["categ"])) {
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
        </div>
      </div>
    </div>
<?php $_POST["nomeProdotto"]=NULL; $_POST["prezzo"]=NULL; $_POST["desc"]=NULL; $_POST["img"]=NULL; $_POST["categ"]=NULL; $_FILES["immagine"]=NULL;
}else{ ?>
<div class="text-center form-signin">
  <form action="" method="POST" enctype="multipart/form-data">
    <h1 class=" my-4 h3 mb-3 text-center text-white fw-normal">Compila i seguenti campi per aggiungere un prodotto:</h1>
    <div class="container-lg">
      <?php
    $productDataRegistration = ["Nome"  => "nomeProdotto", "Prezzo"=> "prezzo", "Descizione" => "desc", "Categoria" => "categ"];
            $msgDataInvalid =["username" => "Riempi questo campo", "password" => "Inserisci almeno 8 caratteri, tra cui un carattere speciale, un numero e una lettera maiuscola", "tel"=> "Inserisci un numero valido di 10 cifre"];
            foreach ($productDataRegistration as $data => $type):
     ?>
      <div class="form-floating d-flex">
          <input type="text" class="form-control my-2" id="<?php echo $type?>" placeholder="nameExample" name="<?php echo $type?>" /> <!-- oninvalid="this.setCustomValidity('cambia messaggio')" puoi cambiare il messaggio d'errore-->
          <label for="floatingInput"><?php echo $data?></label>
      </div>
<?php endforeach;?>
      <div class="form-floating d-flex">
          <input type="file" class="form-control my-2" id="immagine" placeholder="nameExample" name="immagine" /> <!-- oninvalid="this.setCustomValidity('cambia messaggio')" puoi cambiare il messaggio d'errore-->
          <label for="floatingInput">Immagine</label>
        </div>
    <button class="w-100 btn btn-lg btn-warning" type="submit">Inserisci</button>
    </div>
  </form>
</div>
<?php } ?>
