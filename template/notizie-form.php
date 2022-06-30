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
  
<?php $_POST["titolo"]=NULL; $_POST["descrizione"]=NULL;
}else{ ?>

<div class="container-fluid mt-2 w-75 p-2">
      <div class="row row-cols-1 d-flex justify-content-center"> <!-- ho tolto row-cols-lg-3 che mi dava la forma a quadretto per la card.<img class="img img-fluid" src="img/ echo $info["img"]?>" style="height:100%; width:100%;"></img>-->
        <div class="card card-cover text-white bg-dark rounded-5 shadow-lg text-center">
                <form action="" method="post" enctype="multipart/form-data">
                  <h1 class=" my-4 h3 mb-3 text-center text-white">Inserisci una nuova notizia</h1>
                  <div class="container-lg p-1">
                    <?php
                  $userDataRegistration = ["Titolo"  => "titolo", "Descrizione"=> "descrizione"];
                          foreach ($userDataRegistration as $data => $type):?>
                    <div class="form-floating d-flex justify-content-center ">
                        <input type="text" class="form-control my-2" id="<?php echo $type?>" name="<?php echo $type?>" required="required"/> <!-- oninvalid="this.setCustomValidity('cambia messaggio')" puoi cambiare il messaggio d'errore-->
                        <label class="text-dark" for="floatingInput"><?php echo $data?></label>
                    </div>
              <?php endforeach;?>
                    <div class="form-floating d-flex justify-content-center">
                        <input type="file" class="form-control my-2 " id="immagine" placeholder="nameExample" name="immagine" required="required" /> 
                        <label class="text-dark" for="floatingInput ">Immagine</label>
                      </div>
                  <button class="btn btn-warning m-3" type="submit">inserisci</button>
                  </div>
                </form>
              </div>
        </div>
      </div>
  </div>
  <?php } ?>
