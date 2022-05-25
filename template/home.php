 <div class="container-lg mt-2">
  <div class="card card-cover text-white bg-dark rounded-5 shadow-lg">
    <span><p class="text-center"> prova </p></span>
  </div>
  </div>


<?php foreach($templateParams["notizia"] as $news):?>
<div class="container-lg my-5 fade">
  <div class="row mx-5 p-4 pb-auto pe-lg-0 pt-lg-5 text-white rounded-3 shadow-lg bg-dark ">
    <div class="col-lg-6 p-3 p-lg-5 pt-lg-3">
      <h1 class="display-5 fw-bold lh-1"><?php echo $news["titolo"] ?></h1>
      <p class="lead">
        <cite><?php echo $news["contenuto"] ?></cite>
      </p>
      
      <div class="d-grid mt-4 d-md-flex justify-content-md-center ">
        <?php if($news['idnews']==1){ ?> <!--Questa forzatura va valutata, o inseriamo un nuovo ruolo da mettere nelle notizie per suddividere i button sotto, tra quelli che rimandano all'about e quelli che riandano ai prodotti  -->
        <button type="button" class="btn btn-warning">About-us</button>
        <?php } else {?>
          <button type="button" class="btn btn-warning">Visualizza il menù</button>
          <?php } ?>
      </div>
    </div>
    <div class="col-lg-5 p-3 mx-1 text-center d-flex align-items-center overflow-hidden shadow-lg"> <!--  align-items-center va sempre con d-flex per modificare l'allineamento verticale centrale-->
      <img class=" img img-fluid  "  src="<?php echo $news["immagine"] ?>" alt=""/>
    </div>
  </div>
</div>
<?php endforeach; ?>
<div class="container-lg mt-2 fade">
  <div class="card card-cover text-white bg-dark rounded-5 shadow-lg">
    <span class="text-center overflow-hidden">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2863.421765648172!2d12.24379561513581!3d44.1365477290594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132ca4c84ba16541%3A0x6ebdadf647fd2af5!2sVia%20Martiri%20D&#39;Ungheria%2C%206%2C%2047521%20Cesena%20FC!5e0!3m2!1sit!2sit!4v1653045886880!5m2!1sit!2sit" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>      </div>

</span>
  </div>
  </div>
<script src="script/showhero.js"> </script>