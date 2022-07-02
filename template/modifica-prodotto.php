<?php
$nameErr = $prezzoErr = $imgError = $descErr = $categErr = "";
$controlloErr = 1;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $controlloErr = 0;
  if (empty($_POST["nome"])) {
    $nameErr = "Inserisci un nome per il prodotto da modificare ";
    $controlloErr = 1;
  } else {
    $presente = $dbh->checkNomeProdotto($_POST["nome"]);
    if ($presente!= false && $templateParams["prodotto"]["nome"] != $_POST["nome"]) {
      $nameErr = "Questo nome del prodotto è gia in uso";
      $controlloErr = 1;
    }
  }

  $numeri = preg_match('/^([0-9]+)|((([1-9][0-9]*)|([0-9]))([.,])[0-9]{1,2})$/',$_POST["prezzo"]);
  if (empty($_POST["prezzo"])) {
    $prezzoErr = "Inserisci il prezzo del prodotto";
    $controlloErr = 1;
  }else {
    if(!$numeri){
      $prezzoErr="Il formato del prezzo non corrisponde a quelli consentiti, inseriscilo nuovamente";
      $controlloErr = 1;
    }
  }

  if (empty($_POST["descrizione"])) {
    $descErr = "Per favore inserisci la lista degli ingredienti o una breve descrizione";
    $controlloErr = 1;
  }

 $lettere = preg_match('/[A-Za-z]/', $_POST["categoria"]);
  if (empty($_POST["categoria"])) {
    $categErr = "Definisci una categoria d'appartenenza";
    $controlloErr = 1;
  }else{
    $presente = $dbh->checkNomeCategoria($_POST["categoria"]);
    if ($presente == NULL){
      $categErr = "Questa categoria non esiste, aggiungila prima di inserirla in una modifica";
      $controlloErr = 1;
    }else{
      if(!$lettere){
      $categErr =" Sono consentiti solamente caratteri A-Z maiuscoli e minuscoli";
      $controlloErr =1;
    }
  }
  }
if ($controlloErr == 0) {
  if (isset($_POST["idprodotto"]) and isset($_POST["nome"]) and isset($_POST["descrizione"]) and isset($_POST["categoria"]) and isset($_POST["prezzo"])) {
    $dbh->updateProdotto($_POST["nome"], $_POST["descrizione"], $_POST["categoria"], $_POST["prezzo"], $_POST["idprodotto"]);
    if (isset($_FILES["immagine"])) {
      $dbh->uploadImmagine($_POST["idprodotto"], "prodotto");
      $_FILES["immagine"]== NULL;
    }
  }
?>

<div class="container-lg mt-2" id="card">
      <div class="row row-cols-1 align-items-stretch g-4 ">
        <div class="card card-cover  text-white bg-dark rounded-5 shadow-lg">
          <div class="d-flex flex-column text-center pb-3 text-white">
          <img class="rounded-circle mx-auto d-block my-2 img-fluid" src='img/<?php if ($_FILES["immagine"]["name"]==NULL) {
            echo $templateParams["prodotto"]["img"];
          }else{
            echo $_FILES["immagine"]["name"];
          } ?>' style="width:250px; height:250px;"/>
            <h2 class="pt-5 mb-4 display-4 text-center lh-1 overflow-hidden fw-bold"><?php echo $_POST["nome"]?></h2>
            <div class="text-white">
              <p class="lead">
            <cite>Hai modificato il prodotto con successo</cite>
          </p>
          <div class="d-grid gap-2 d-md-flex justify-content-md-center ">
            <button type="button" class="btn btn-warning" onclick='window.location="listaProdotti.php"'>Torna alla lista dei prodotti</button>
          </div>
            </div>
          </div>
        </div>
      </div>
  </div>




<?php $_POST["nome"] = $_POST["prezzo"] = $_POST["descrizione"] = $_POST["img"] = $_POST["categoria"] = $_FILES["immagine"] = NULL;
}
}
?>
<div class="container-fluid mt-2 w-75 p-2" <?php if ($controlloErr == 0){ echo "hidden";} ?>>
      <div class="row row-cols-1 d-flex justify-content-center"> <!-- ho tolto row-cols-lg-3 che mi dava la forma a quadretto per la card.<img class="img img-fluid" src="img/ echo $info["img"]?>" style="height:100%; width:100%;"></img>-->
        <div class="card card-cover text-white bg-dark rounded-5 shadow-lg text-center">
              <div class="container text-center p-1 ">
                <form action="modificaProdotto.php?id=<?php echo $_GET["id"]; ?>" method="post" enctype="multipart/form-data">
                <img class="mx-auto d-block my-2 img-fluid" src='img/<?php echo $templateParams["prodotto"]["img"];?>' style="width:250px; height:250px;"/>
                  <h1 class=" my-4 display-5 mb-3 text-center text-white fw-normal">Modifica i campi del prodotto:</h1>
                  <div class="container-lg p-1">
                    <div class="form-floating">
                        <input type="text" class="form-control my-2" id="idprodotto" value="<?php echo $templateParams["prodotto"]["idprodotto"] ?>" name="idprodotto" hidden />
                    </div>
                    <div class="form-floating ">
                        <input type="text" class="form-control my-2" id="nome" value="<?php echo $templateParams["prodotto"]["nome"] ?>" name="nome" /> <!-- oninvalid="this.setCustomValidity('cambia messaggio')" puoi cambiare il messaggio d'errore-->
                        <label class="text-dark" for="floatingInput">Nome</label>
                        <span class="error d-block text-start text-danger"><?php echo $nameErr;?></span>
                    </div>
                    <div class="form-floating ">
                        <input type="text" class="form-control my-2" id="descrizione" value="<?php echo $templateParams["prodotto"]["descrizione"] ?>" name="descrizione" />
                        <label class="text-dark" for="floatingInput">Ingredienti</label>
                        <span class="error d-block text-start text-danger"><?php echo $descErr;?></span>
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control my-2" id="categoria" value="<?php echo $templateParams["prodotto"]["categoria"] ?>" name="categoria" />
                        <label class="text-dark" for="floatingInput">Categoria</label>
                        <span class="error d-block text-start text-danger"><?php echo $categErr;?></span>
                    </div>
                    <div class="form-floating ">
                        <input type="text" class="form-control my-2" id="prezzo" value="<?php echo $templateParams["prodotto"]["prezzo"] ?>" name="prezzo" />
                        <label class="text-dark" for="floatingInput">Prezzo</label>
                        <span class="error d-block text-start text-danger"><?php echo $prezzoErr;?></span>
                    </div>

                    <div class="form-floating">
                        <input type="file" class="form-control my-2" id="immagine" name="immagine" />
                        <label class="text-dark" for="floatingInput">Immagine</label>
                    </div>
                  <button class=" my-1 btn  btn-warning" type="submit">Modifica <i class="fa-solid fa-pen-to-square"></i></button>
                  </div>
                </form>
                <button class="my-1 btn btn-md btn-danger" value="<?php echo $templateParams["prodotto"]["idprodotto"]?>" onclick="eliminaProdotto(this.value);">Rimuovi <i class="fa-solid fa-trash-can"></i></button>
                </div>
              </div>
            </div>
          </div>

<script>
function eliminaProdotto(val) {
  if (confirm("Sei sicuro di voler rimuove questo prodotto dal tuo menù ?") == true) {
    window.location="listaProdotti.php?elimina=1&prodotto="+val;
  }else {

  }
}
</script>
