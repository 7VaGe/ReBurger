<div class="container-lg">
  <ol class="list-group">
  <?php foreach($templateParams["catego"] as $category):?>
    <li class="mt-3 bg-dark rounded-3 shadow-lg text-white list-group-item d-flex justify-content-center align-items-start">
      <div class="ms-2 me-auto" data-bs-toggle="collapse" data-bs-target="#<?php echo $category["nomecategoria"]?>" aria-expanded="false" aria-controls="collapseWidthExample">
        <div class="fw-bold display-1"><?php echo $category["nomecategoria"]?></div>
        <p><?php echo $category["nomecategoria"]?></p>
      </div>
      <span class="badge"><i class='mt-3 fas fa-hamburger fa-bounce'  style='font-size:48px;color:rgb(247,193,68)'></i></span>
    </li>
  <?php endforeach; ?>
  </ol>
</div>
<?php foreach($templateParams["catego"] as $category):
  $parametro =$dbh->getProdottoByCategoria($category["idcategoria"]);
   foreach($parametro as $prodotto):?>
    <div class="mt-2 row row-cols-1 row-cols-md-2 g-4 collapse collapse-horizontal" id="<?= $category["nomecategoria"]?>">
    <div class="col d-inline-block">
      <div class="card bg-dark mt-2 text-white">
        <img src="<?php echo $prodotto["img"]?>" class="card-img-top" alt="alt immagine">
        <div class="card-body">
          <h5 class="card-title display-1"><?php echo $prodotto["nome"]?></h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
      </div>
    </div>
    </div>
   <!-- <div class="col-sm-4 text-white px-4 py-5 collapse collapse-horizontal" id="" >
      <div class="align-items-center g-4 py-5">
        <div class="col">
          <div class="card card-cover overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="width:250px">
            <div class="d-flex flex-column text-center pb-3 text-white">
              <h2 class="pt-5 mb-4 display-1 text-center lh-1 fw-bold"><img src="<?php echo $prodotto["img"]?>" alt="cibo"/></h2>
              <div class="d-flex flex-column display-5 fw-bold text-white text-shadow-1" >
                <p><?php echo $prodotto["nome"]?></p>
              </div>
              <div class="text-white">
                <cite><?php echo $prodotto["descrizione"]?></cite>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>-->
  <?php endforeach; ?>
<?php endforeach; ?>
