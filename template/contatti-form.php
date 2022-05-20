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
            <h2 class="pt-5 mb-4 display-1 text-center lh-1 overflow-hidden "><img class="img img-fluid" src="img/<?php echo $info["img"]?>" style="height:100%; width:100%;"></img></h2>
            
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


  <div class="container col-xxl-8 px-4 py-5 text-white">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="img/<?php echo $info["img"]?>" class="d-block mx-lg-auto img-fluid" alt="" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-6 fw-bold lh-1 mb-3">Cibo e impegno sociale</h1>
        <p class="lead"><?php echo $info["descrizione1"];?></p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button type="button" class="btn btn-warning btn-lg px-4 me-md-2">Primary</button>
          <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
        </div>
      </div>
    </div>
  </div>

  <div class="container col-xxl-8 px-4 text-white">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-lg-6">
        <h1 class="display-6 fw-bold lh-1 mb-3">Ricerca incondizionata</h1>
        <p class="lead"><?php echo $info["descrizione2"];?></p>
      </div>
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="img/<?php echo $info["img"]?>" class="d-block mx-lg-auto img-fluid" alt="" width="700" height="500" loading="lazy">
      </div>
    </div>
  </div>
  <div class="px-4 text-center text-white">
    <h1 class="display-5 fw-bold">Sinceramente parlando</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4"><?php echo $info["descrizione3"];?></p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
        <button type="button" class="btn btn-warning btn-lg px-4 me-sm-3">Primary button</button>
        <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button>
      </div>
    </div>
    <div class="overflow-hidden" style="max-height: 30vh;">
      <div class="container px-5">
        <img src="img/<?php echo $info["img"]?>" class="img-fluid  rounded-3 shadow-lg mb-4" alt="" width="700" height="500" loading="lazy">
      </div>
    </div>
  </div>

  <div class="container-lg text-center">
<?php if(isset($_SESSION["username"]) && $_SESSION["username"]=="propriolui"){ //da sostituire con il controllo se l'utente è o meno il venditore?>
        <button type="button" class="w-75 btn btn-warning mt-4" onclick='window.location="modificaVenditore.php"' >Modifica <i class="fa-solid fa-pen-to-square"></i></button>
      <?php  }?>
</div>