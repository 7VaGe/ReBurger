<?php if (isset($_GET["indirizzo"]) and isset($_GET["descrizione"]) and isset($_GET["nome_locale"])) {
    $dbh->updateContatti($_GET["indirizzo"], $_GET["descrizione"], $_GET["nome_locale"]);
    $_GET["indirizzo"]=NULL; $_GET["descrizione"]=NULL; $_GET["nome_locale"]=NULL;
    $templateParams["info"] = $dbh->getInfoVenditore();
  }?>
  <div class="container-lg mt-2" id="card">
    <?php foreach ($templateParams["info"] as $info) :?>
      <div class="row row-cols-1 align-items-stretch g-4"> <!-- ho tolto row-cols-lg-3 che mi dava la forma a quadretto per la card.<img class="img img-fluid" src="img/ echo $info["img"]?>" style="height:100%; width:100%;"></img>-->
        <div class="card card-cover  text-white bg-dark rounded-5 shadow-lg">
          <div class="d-flex flex-column text-center pb-3  text-white">
            <h2 class="pt-5 mb-4 display-1 text-center lh-1 overflow-hidden "></h2>       
            <div class="d-flex flex-column display-4 fw-bold text-white text-shadow-1" >
              <p><img class="img img-fluid "src="img/Logo2.png" alt=""/></p>
            </div>
            <div class="text-white">
             <p class="display-6"> <?php echo $info["descrizione"] ?></p>             
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
  </div>
  <div class="container col-xxl-8 px-4 py-5 text-white fade" >
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
  <div class="container col-xxl-8 px-4 text-white ">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5 fade">
      <div class="col-lg-6">
        <h1 class="display-6 fw-bold lh-1 mb-3">Ricerca incondizionata</h1>
        <p class="lead"><?php echo $info["descrizione2"];?></p>
      </div>
      <div class="col-10 col-sm-8 col-lg-6 fade">
        <img src="img/<?php echo $info["img"]?>" class="d-block mx-lg-auto img-fluid" alt="" width="700" height="500" loading="lazy">
      </div>
    </div>
  </div>
  <div class="px-4 text-center text-white fade">
    <h1 class="display-5 fw-bold">Sinceramente parlando</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4"><?php echo $info["descrizione3"];?></p>
    </div>
    <div class="overflow-hidden" style="max-height: 30vh;">
      <div class="container px-5">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2863.421765648172!2d12.24379561513581!3d44.1365477290594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132ca4c84ba16541%3A0x6ebdadf647fd2af5!2sVia%20Martiri%20D&#39;Ungheria%2C%206%2C%2047521%20Cesena%20FC!5e0!3m2!1sit!2sit!4v1653045886880!5m2!1sit!2sit" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>      </div>
    </div>
  </div>
  <div class="container-lg text-center">
<?php if(isset($_SESSION["username"]) && $_SESSION["username"]=="propriolui"){ //da sostituire con il controllo se l'utente è o meno il venditore?>
        <button type="button" class="w-75 btn btn-warning mt-4" onclick='window.location="modificaVenditore.php"' >Modifica <i class="fa-solid fa-pen-to-square"></i></button>
      <?php  }?>
</div>

<script src="script/showhero.js"> </script>