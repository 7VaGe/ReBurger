<?php foreach($templateParams["notizia"] as $news):?>
<div class="container-lg my-5">
  <div class="row mx-4 p-4 pb-auto pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg bg-white">
    <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
      <h1 class="display-4 fw-bold lh-1"><?php echo $news["titolo"] ?></h1>
      <p class="lead">
        <cite><?php echo $news["contenuto"] ?></cite>
      </p>
      <div class="d-grid gap-2 d-md-flex justify-content-md-start ">
        <button type="button" class="btn btn-warning">About-us</button>
      </div>
    </div>
    <div class="col-lg-4 p-2 text-center overflow-hidden shadow-lg">
      <img  src="<?php echo $news["immagine"] ?>" alt=""/>
    </div>
  </div>
</div>
<?php endforeach; ?>
