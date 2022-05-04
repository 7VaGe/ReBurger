<?php if (isset($_POST["indirizzo"]) and isset($_POST["descrizione"]) and isset($_POST["nome_locale"])) {
    $dbh->updateContatti($_POST["indirizzo"], $_POST["descrizione"], $_POST["nome_locale"]);
    $_POST["indirizzo"]=NULL; $_POST["descrizione"]=NULL; $_POST["nome_locale"]=NULL;
    $templateParams["info"] = $dbh->getInfoVenditore();
  }?>
<?php foreach ($templateParams["info"] as $info) :?>
<div class="row row-cols-1  align-items-stretch g-4 py-5"> <!-- ho tolto row-cols-lg-3 che mi dava la forma a quadretto per la card.-->
  <div class="card card-cover overflow-hidden text-white bg-dark rounded-5 shadow-lg">
    <div class="d-flex flex-column text-center pb-3 text-white">
      <h2 class="pt-5 mb-4 display-1 text-center lh-1 fw-bold"><img class="img" src="img/locale.jpg"></img></h2>
      <h2><?php echo $info["indirizzo"] ?></h2>
      <div class="d-flex flex-column display-5 fw-bold text-white text-shadow-1" >
        <p><?php echo $info["nome"] ?></p>
      </div>
      <div class="text-white">
        <cite><?php echo $info["descrizione"] ?></cite>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>
<?php if(isset($_SESSION["username"]) && $_SESSION["username"]=="propriolui"){ //da sostituire con il controllo se l'utente è o meno il venditore?>
  <button type="button" class="btn btn-primary" onclick='window.location="modificaVenditore.php"' >Modifica</button>
<?php  }?>
