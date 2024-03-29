<?php
if (isset($_SESSION["venditore"])) {?>

    <div class=" text-center mb-5">
      <span class="text-center m-2"><button type="button" class="btn btn-warning" onclick="window.location='notizie.php'" name="button">Aggiungi notizia</button></span>
    </div>
<?php } ?>
<?php foreach($templateParams["notizia"] as $news):?>
  <div class="container-fluid md-center col-xxl-8 px-4 text-white rounded-3 shadow-lg fade mt-3" id="<?php echo $news["idnews"]?>">
    <?php if(isset($_SESSION["venditore"])){ ?>
      <button class=' btn position-static p-2 btn-danger w-25 rounded text-white' id="delNews<?php echo $news["idnews"]?>" value="<?php echo $news["idnews"]?>" onclick='rimuoviNotizia(this.value);' >
      <i class="fa-solid fa-trash-can"></i> Rimuovi notizia
    </button>
  <?php } ?>
   <div class="row flex-lg-row-reverse d-flex justify-content-center align-items-center g-5 m-3">
     <div class="col-10 col-sm-8 col-lg-6 overflow-hidden shadow p-3 mb-3 mt-3">
       <img class="img img-fluid" alt="Immagine per la <?php echo $news["idnews"];?>^ notizia" src="<?php echo "img/".$news["immagine"] ?>" />
     </div>
     <div class="col-lg-6">
       <div class="display-6 fw-bold lh-1 mb-3"><?php echo $news["titolo"] ?></div>
       <p class="lead"><?php echo $news["contenuto"] ?></p>
       <div class="d-grid gap-2 d-md-flex justify-content-md-center ">
         <?php if($news['idnews']==1){ ?> <!--Questa forzatura va valutata, o inseriamo un nuovo ruolo da mettere nelle notizie per suddividere i button sotto, tra quelli che rimandano all'about e quelli che riandano ai prodotti  -->
         <button onclick="window.location='contatti.php'" type="button" class="btn btn-warning m-3">About-us</button>
       <?php } else {?>
         <button onclick="window.location='menu.php'" type="button" class="btn btn-warning  m-3">Visualizza il menù</button>
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
    <div class="container-fluid">
      <div class="row row-cols-1  row-cols-lg-4 g-4 d-flex justify-content-center">
        <?php foreach($templateParams["prodottoRandom"] as $prodotto) : ?>
          <div class="col wrapper m-4 ">
            <div class="bg-dark">
              <figure class="card card-product-grid bg-dark rounded-6 shadow d-flex align-items-center">
                <div class="img-wrapper">
                  <img src="img/<?php $imgNoSpace = str_replace(' ', '', $prodotto["img"]);
                                echo $imgNoSpace?>"  alt="<?php echo $prodotto["descrizione"]?>" style="height: 220px;" class="figure img-fluid p-5 "/>
              </div>
              <div class="front">
                <div class="info-wrap px-3" >
                  <p class="title mb-2 pt-4 text-center fw-bold"><?php echo str_replace('_', ' ', $prodotto["nome"])?></p>
        </div>
              </div>                                        <!-- fine front  -->
              <div class="back">
                <div class="card card-product-grid bg-dark rounded-6 shadow d-flex align-items-center pt-5">
                  <div class="text-white text-center">
                    <p class="title mb-2 text-center fw-bold"><?php echo str_replace('_', ' ', $prodotto["nome"])?></p>
                    <p class="mb-2 p-2 text-center"><?php echo $prodotto["descrizione"]?></p>
                    <p class="mb-2 text-center ">Prezzo: <?php echo $prodotto["prezzo"]?> € </p>
                    <div class="text-center mb-2 mt-5">
                      <button onclick="window.location='menu.php'" class="add-to-cart btn btn-warning m-3" >Ordina ora!</button>
                    </div>
        </div>
                </div>
              </div>
            </figure>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>

<div class="m-5 fade" >
  <div class="row p-4 pb-auto pt-lg-5 text-dark rounded-3 shadow-lg justify-content-between" style="background-color: rgb(255, 187, 0)">
    <div class="col-lg-6 p-3 p-lg-5 pt-lg-3 text-center">
      <div class="display-5 fw-bold lh-1">Scarica Moovit</div>
      <p class="lead text-dark"><cite>Ottieni le indicazioni per raggiungerci, comodamente sul tuo smartphone!<br></cite><div><p>Inquadra questo QR-Code</p></div></p>
      <div class="d-grid mt-4 d-md-flex justify-content-md-center ">
        <button onclick="window.location='contatti.php'" type="button" class="btn btn-dark">About-us</button>
      </div>
    </div>
    <div class="col-lg-2 d-flex align-items-center justify-content-center border-5 rounded-3 bg-dark overflow-hidden shadow-lg"> <!--  align-items-center va sempre con d-flex per modificare l'allineamento verticale centrale-->
     <img id="QRcode" src="img/<?php $imgNoSpace = str_replace(' ', '', "moovit.png");
                 echo $imgNoSpace?>" alt="QRCODE" class="img img-fluid p-3" />
    </div>
  </div>
</div>


<script src="script/showhero.js"> </script>

<script>
function rimuoviNotizia(idnews){
  document.getElementById(idnews).style.display = "none";
  var http =new XMLHttpRequest();
  http.open("get", "index.php?n="+idnews,true);
  http.send();
  http.onload = function(){
    window.alert("la notizia è stata rimossa");
    var elem = 'delNews'+idnews;
    var ff = document.getElementById(idnews).value;
    if(ff==idnews){
      elem.remove();
    }
  }
}

</script>
