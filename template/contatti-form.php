<?php if (isset($_GET["indirizzo"]) and isset($_GET["descrizione"]) and isset($_GET["nome_locale"])) {
    $dbh->updateContatti($_GET["indirizzo"], $_GET["descrizione"], $_GET["nome_locale"]);
    $_GET["indirizzo"]=NULL; $_GET["descrizione"]=NULL; $_GET["nome_locale"]=NULL;
    $templateParams["info"] = $dbh->getInfoVenditore();
  }?>
  <div class="container-lg mt-2">
    <?php foreach ($templateParams["info"] as $info) :?>
      <div class="row row-cols-1 align-items-stretch g-4"> <!-- ho tolto row-cols-lg-3 che mi dava la forma a quadretto per la card.-->
        <div class="card card-cover  text-white bg-dark rounded-5 shadow-lg">
          <div class="d-flex flex-column text-center pb-3  text-white">
            <h2 class="pt-5 mb-4 display-1 text-center lh-1 overflow-hidden "><img class="img" src="img/<?php echo $info["img"]?>"></img></h2>
            
            <div class="d-flex flex-column display-5 fw-bold text-white text-shadow-1" >
              <p><?php echo $info["nome"] ?></p>
            </div>
            <div class="text-white">
             <p> <?php echo $info["descrizione"] ?></p>
              
              <h2><?php echo $info["indirizzo"] ?></h2>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
      
  </div>
  <div class="container-lg text-center">
<?php if(isset($_SESSION["username"]) && $_SESSION["username"]=="propriolui"){ //da sostituire con il controllo se l'utente è o meno il venditore?>
        <button type="button" class="w-75 btn btn-warning mt-4" onclick='window.location="modificaVenditore.php"' >Modifica <i class="fa-solid fa-pen-to-square"></i></button>
      <?php  }?>
</div>