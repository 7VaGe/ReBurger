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
     
     <div class="container-lg mt-2" id="card">
      <div class="row row-cols-1 align-items-stretch g-4 "> <!-- ho tolto row-cols-lg-3 che mi dava la forma a quadretto per la card.<img class="img img-fluid" src="img/ echo $info["img"]?>" style="height:100%; width:100%;"></img>-->
        <div class="card card-cover  text-white bg-dark rounded-5 shadow-lg">
          <div class="d-flex flex-column text-center pb-3  text-white">
            <h2 class="pt-5 mb-4 display-4 text-center lh-1 overflow-hidden fw-bold"><?php echo $_POST["nomeProdotto"] ?></h2>
            <div class="text-white">
              <p class="lead">
            <cite>Hai inserito il prodotto con successo</cite>
          </p>
          <div class="d-grid gap-2 d-md-flex justify-content-md-center ">
            <button type="button" class="btn btn-warning" onclick='window.location="listaProdotti.php"'>Torna alla lista dei prodotti</button>
          </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  
<?php $_POST["nomeProdotto"]=NULL; $_POST["prezzo"]=NULL; $_POST["desc"]=NULL; $_POST["img"]=NULL; $_POST["categ"]=NULL; $_FILES["immagine"]=NULL;
}
}?>


<div class="container-fluid mt-2 w-75 p-2">
      <div class="row row-cols-1 d-flex justify-content-center"> <!-- ho tolto row-cols-lg-3 che mi dava la forma a quadretto per la card.<img class="img img-fluid" src="img/ echo $info["img"]?>" style="height:100%; width:100%;"></img>-->
        <div class="card card-cover text-white bg-dark rounded-5 shadow-lg text-center">
          <div class="container text-center p-1">
            <form action="" method="POST" enctype="multipart/form-data">
              <h1 class=" my-4 h3 mb-3 text-center text-white fw-normal">Compila i seguenti campi per aggiungere un prodotto:</h1>
              <div class="container-lg">
                <div class="form-floating d-flex  justify-content-centerv">
                    <input type="text" class="form-control my-2" id="nomeProdotto" name="nomeProdotto"required="required" /> <!-- oninvalid="this.setCustomValidity('cambia messaggio')" puoi cambiare il messaggio d'errore-->
                    <label class="text-dark"for="floatingInput">Nome</label>
                    <span class="error" style="color:red"><?php echo $nameErr;?></span>
                </div>
                <div class="form-floating d-flex justify-content-center">
                    <input type="text" class="form-control my-2" id="prezzo" name="prezzo"required="required" />
                    <label class="text-dark"for="floatingInput">Prezzo</label>
                    <div>
                       <span class="error" style="color:red"><?php echo $prezzoErr;?></span>
                    </div>
                </div>
                <div class="form-floating d-flex justify-content-center">
                    <input type="text" class="form-control my-2" id="desc" name="desc" required="required"/> 
                    <label class="text-dark"for="floatingInput">Descizione</label>
                    <span class="error" style="color:red"><?php echo $descErr;?></span>
                </div>
                <div class="form-floating d-flex justify-content-center">
                    <input type="text" class="form-control my-2" id="categ" name="categ"required="required" /> 
                    <label class="text-dark"for="floatingInput">Categoria</label>
                    <span class="error" style="color:red"><?php echo $categErr;?></span>
                </div>
                <div class="form-floating d-flex justify-content-center">
                    <input type="file" class="form-control my-2" id="immagine" name="immagine"required="required" /> 
                    <label class="text-dark"for="floatingInput">Immagine</label>
                  </div>
              <button class="btn btn-warning my-3" type="submit">Inserisci</button>
              </div>
            </form>
          </div>
        </div>
      </div> 
    </div>
    <script src="script/checkinput.js"></script>