<?php
$titoloErr = $descErr = "";
$controlloErr = 1;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $controlloErr = 0;

  if (empty($_POST["titolo"])) {
    $titoloErr = "Inserisci un titolo";
    $controlloErr = 1;
  }

  if (empty($_POST["descrizione"])) {
    $descErr = "Inserisci una descrizione";
    $controlloErr = 1;
  }

  if (isset($_POST["titolo"]) && isset($_POST["descrizione"]) && $controlloErr == 0) {
    $indice = $dbh->insertNews($_POST["titolo"], $_POST["descrizione"]);
    if(isset($_FILES["immagine"])){
      $dbh->uploadImmagine($indice, "notizie");
      $_FILES["immagine"]= NULL;
    }
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

<?php $_POST["titolo"]=NULL; $_POST["descrizione"]=NULL;
}
} ?>

<div class="container-fluid mt-2 w-75 p-2" <?php if ($controlloErr == 0) {  echo "hidden";} ?>>
      <div class="row row-cols-1 d-flex justify-content-center"> <!-- ho tolto row-cols-lg-3 che mi dava la forma a quadretto per la card.<img class="img img-fluid" src="img/ echo $info["img"]?>" style="height:100%; width:100%;"></img>-->
        <div class="card card-cover text-white bg-dark rounded-5 shadow-lg text-center">
                <form action="notizie.php" method="post" enctype="multipart/form-data">
                  <h1 class=" my-4 h3 mb-3 text-center text-white">Inserisci una nuova notizia</h1>
                  <div class="container-lg p-1">
                    <div class="form-floating">
                        <input type="text" class="form-control my-2" id="titolo" name="titolo"/> <!-- oninvalid="this.setCustomValidity('cambia messaggio')" puoi cambiare il messaggio d'errore-->
                        <label class="text-dark">Titolo</label>
                        <span class="error d-block text-start text-danger"><?php echo $titoloErr;?></span>
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control my-2" id="descrizione" name="descrizione"/> <!-- oninvalid="this.setCustomValidity('cambia messaggio')" puoi cambiare il messaggio d'errore-->
                        <label class="text-dark">Descrizione</label>
                        <span class="error d-block text-start text-danger"><?php echo $descErr;?></span>
                    </div>
                    <div class="form-floating">
                      <input type="file" class="form-control my-2 " id="immagine" name="immagine"/>
                      <label class="text-dark">Immagine</label>
                    </div>
                  <button class="btn btn-warning m-3" type="submit">inserisci</button>
                  </div>
                </form>
              </div>
        </div>
      </div>
