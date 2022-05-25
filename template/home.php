 <div class="container-lg mt-2">
  <div class="card card-cover text-white bg-dark rounded-5 shadow-lg">
    <span><p class="text-center"> prova </p></span>
  </div>
  </div>

  <?php foreach($templateParams["notizia"] as $news):?>
  <div class="container col-xxl-8 px-4 text-white rounded-3 shadow-lg ">
    <div class="row flex-lg-row-reverse d-flex align-items-center g-5 fade">
      <div class="col-10 col-sm-8 col-lg-6 overflow-hidden shadow-lg p-3">
      <img class=" img img-fluid  "  src="<?php echo $news["immagine"] ?>" alt=""/>
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3"><?php echo $news["titolo"] ?></h1>
        <p class="lead"><cite><?php echo $news["contenuto"] ?></cite></p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
        <?php if($news['idnews']==1){ ?> <!--Questa forzatura va valutata, o inseriamo un nuovo ruolo da mettere nelle notizie per suddividere i button sotto, tra quelli che rimandano all'about e quelli che riandano ai prodotti  -->
        <button type="button" class="btn btn-warning">About-us</button>
        <?php } else {?>
          <button type="button" class="btn btn-warning">Visualizza il menù</button>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
  <?php endforeach; ?> <!-- fine hero-->

<div class="album py-5 mb-5 bg-dark text-white fade">
  <div class="text-center mb-4">
    <span class="text-white display-4 fw-bold ">Prodotti consigliati:</span>
  </div>
    <div class="container-lg">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
        <?php foreach($templateParams["prodottoRandom"] as $prodotto) : ?>
        <div class="col">

          <figure class="card card-product-grid bg-dark rounded-6 shadow">
          <div class="img-wrap text-center">
          <img src="img/<?php
                $imgNoSpace = str_replace(' ', '', $prodotto["img"]);            //da togliere e sistemare l'immagine in php
                 echo $imgNoSpace?>" class="figure img-fluid  p-3" alt="..." style="height: 220px;"/>
          </div>
          <figcaption class="info-wrap px-3">
          <p class="title mb-2 text-center fw-bold"><?php echo str_replace('_', ' ', $prodotto["nome"])?></p>
                <p class="mb-2 text-center"><?php echo $prodotto["descrizione"]?></p>
                <div class="text-center">
                  <button onclick="window.location='menu.php'" class="add-to-cart btn btn-warning m-3" id="goToMenù" >Ordina ora!</button>
                </div>
                <!-- va inserito qui un effetto, o un feedback visivo per l'avvenuta aggiunta nel carrello, devo capire se posso usare un onclick="" oppure il codice si impalla,
                ad ogni modo quando viene aggiunto o metto un effetto o un messaggio in dissolvenza (fadein+fadeout o altro) -->
          </figcaption>
        </figure>
          
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>

  <div class="my-5 fade">
  <div class="row mx-5 p-4 pb-auto pe-lg-0 pt-lg-5 text-dark rounded-3 shadow-lg justify-content-between" style="background-color: rgb(255, 187, 0)">
    <div class="col-lg-6 p-3 p-lg-5 pt-lg-3">
      <h1 class="display-5 fw-bold lh-1">Scarica Moovit</h1>
      <p class="lead text-dark">
        <cite>Ottieni le indicazioni per raggiungerci, comodamente sul tuo smartphone!<br>
        <div class="test-end">Inquadra questo QR-Code</div></cite>
      </p>
      <div class="d-grid mt-4 d-md-flex justify-content-md-center ">
        <button onclick="window.location='contatti.php'" type="button" class="btn btn-dark">About-us</button>
      </div>
    </div>
    <div class="col-lg-5 d-flex mx-3 justify-content-center align-items-center rounded-3 bg-dark overflow-hidden shadow-lg"> <!--  align-items-center va sempre con d-flex per modificare l'allineamento verticale centrale-->
     <img id="QRcode" src="img\<?php
                $imgNoSpace = str_replace(' ', '', "moovit.png");            //da togliere e sistemare l'immagine in php
                 echo $imgNoSpace?>" class="figure img-fluid  p-3" alt="..." 
                 style="
                 height: 250px;"/>
                 </div>
  </div>
  </div>
<script src="script/showhero.js"> </script>