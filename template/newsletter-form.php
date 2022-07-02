<?php
$messaggioErr = $oggettoErr = "";
$controlloErr = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["oggetto"])) {
    $oggettoErr = "Inserisci un oggetto per la mail";
  }

  if (empty($_POST["messaggio"])){
    $messaggioErr = "Inserisci il contenuto della mail";
  }

  if ($controlloErr == 0) {
    $iscritti = $dbh->getNewsLetter();
    foreach ($iscritti as $indirizzo) {
      inviaNewsletter($indirizzo["emailletter"], $_POST["oggetto"], $_POST["messaggio"]);
    }
    $_POST["messaggio"] = $_POST["oggetto"] = NULL;
?>
  <div class="container-lg mt-2">
    <div class="card bg-dark rounded-5 shadow-lg text-center">
      <div class="row mx-4 p-4 pb-auto pe-lg-0 pt-lg-5 align-items-center text-white">
        <div class="col-lg-12 p-3 p-lg-5 pt-lg-3">
          <h1 class="display-4 fw-bold lh-1">Hai inviato la newsletter con successo</h1>
          <p class="lead">
            <cite>Hai informato tutti gli iscritti alla newsletter torna alla home o inviane un'altra.</cite>
          </p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-center mt-4">
              <button type="button" class="btn btn-warning" onclick='window.location="index.php"'>Torna alla Home</button>
            </div>
          </div>
        </div>
      </div>
  </div>
  <?php }
}?>
  <div class="container-fluid mt-20 w-50 p-20">
    <div class="row row-cols-1 d-flex justify-content-center"> <!-- ho tolto row-cols-lg-3 che mi dava la forma a quadretto per la card.<img class="img img-fluid" src="img/ echo $info["img"]?>" style="height:100%; width:100%;"></img>-->
      <div class="card card-cover text-white bg-dark rounded-5 shadow-lg text-center">
        <div class="text-center p-1 ">
          <form action="newsletter.php" method="post" enctype="multipart/form-data" id="formSignUp">
            <h1 class=" my-4 h3 mb-3 text-center text-white fw-normal">Inserisci oggetto e contenuto del messaggio per la newsletter:</h1>
            <div class="container-lg">
              <div class="form-floating ">
                  <input type="text" class="form-control my-2" id="oggetto" name="oggetto"/> <!-- oninvalid="this.setCustomValidity('cambia messaggio')" puoi cambiare il messaggio d'errore-->
                  <label class="text-dark">Oggetto</label>
                  <span class="error d-block text-start text-danger"><?php echo $oggettoErr; ?></span>
              </div>
              <div class="form-floating ">
                  <textarea class="form-control" id="messaggio" name="messaggio" rows="8" cols="200"></textarea>
                  <span class="error d-block text-start text-danger"><?php echo $messaggioErr; ?></span>
              </div>
            <button class="btn btn-warning" type="submit">Invia</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
