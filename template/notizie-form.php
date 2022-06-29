<?php if (isset($_POST["titolo"]) and isset($_POST["descrizione"])) {
    $indice = $dbh->insertNews($_POST["titolo"], $_POST["descrizione"]);
    $dbh->uploadImmagine($indice, "notizie");
    $_FILES["immagine"]= NULL;
     ?>

<div class="container-lg mt-2" id="card">
      <div class="row row-cols-1 align-items-stretch g-4 "> <!-- ho tolto row-cols-lg-3 che mi dava la forma a quadretto per la card.<img class="img img-fluid" src="img/ echo $info["img"]?>" style="height:100%; width:100%;"></img>-->
        <div class="card card-cover  text-white bg-dark rounded-5 shadow-lg">
          <div class="d-flex flex-column text-center pb-3  text-white">
            <div class="text-white">
              <p class="lead display-6">
            <cite>Hai inserito la notizia con successo</cite>
          </p>
          <div class="d-grid gap-2 d-md-flex justify-content-md-center ">
          <button type="button" class="btn btn-warning" onclick='window.location="index.php"'>Torna alla home</button><button type="button" class="btn btn-warning" onclick='window.location="notizie.php"'>Aggiungi un'altra notizia</button>
          </div>
            </div>
          </div>
        </div>
      </div>
  </div>
    <!-- <div class="container-lg my-5">
      <div class="row mx-4 p-4 pb-auto pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg bg-white">
        <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
          <p class="lead">
            <cite></cite>
          </p>
          <div class="d-grid gap-2 d-md-flex justify-content-md-start ">
            <button type="button" class="btn btn-warning" onclick='window.location="index.php"'>Torna alla home</button><button type="button" class="btn btn-warning" onclick='window.location="notizie.php"'>Aggiungi un'altra notizia</button>
          </div>
        </div>
      </div>
    </div> -->
<?php $_POST["titolo"]=NULL; $_POST["descrizione"]=NULL;
}else{ ?>
<div class="text-center form-signin">
  <form action="" method="post" enctype="multipart/form-data">
    <h1 class=" my-4 h3 mb-3 text-center text-white fw-normal">Inserisci una nuova notizia compilando i seguenti campi:</h1>
    <div class="container-lg">
      <?php
    $userDataRegistration = ["Titolo"  => "titolo", "Descrizione"=> "descrizione"];
            foreach ($userDataRegistration as $data => $type):?>
      <div class="form-floating d-flex">
          <input type="text" class="form-control my-2" id="<?php echo $type?>" placeholder="nameExample" name="<?php echo $type?>" /> <!-- oninvalid="this.setCustomValidity('cambia messaggio')" puoi cambiare il messaggio d'errore-->
          <label for="floatingInput"><?php echo $data?></label>
      </div>
<?php endforeach;?>
      <div class="form-floating d-flex">
          <input type="file" class="form-control my-2" id="immagine" placeholder="nameExample" name="immagine" /> <!-- oninvalid="this.setCustomValidity('cambia messaggio')" puoi cambiare il messaggio d'errore-->
          <label for="floatingInput">Immagine</label>
        </div>
      <div class="container d-flex justify-content-center my-3 py-3">
        <div class="checkbox mb-3">
          <button id="toggle-password" type="button" class="btn-sm btn-warning mx-4 d-none"><i id="eyeIcon"class="bi bi-eye-slash"></i>
          </div>
        </div>
    <button class="w-100 btn btn-lg btn-warning" type="submit">inserisci</button>
    </div>
  </form>
</div>
<?php } ?>
