
<!-- 

<div class="container-lg">
  <ol class="list-group">
  <?php/* foreach($templateParams["catego"] as $category):?>
    <li class="mt-3 bg-dark rounded-3 shadow text-white list-group-item d-flex justify-content-center align-items-start">
      <div class="ms-2 me-auto" data-bs-toggle="collapse" data-bs-target="#<?php echo $category["nomecategoria"]?>" aria-expanded="false" aria-controls="collapseWidthExample">
        <div class="fw-bold display-1"><?php echo $category["nomecategoria"]?></div>
      </div>
      <span class="badge"><i class='<?php echo $category["icona"] ?>' style='font-size:48px;color:rgb(247,193,68)'></i></span>
    </li>
  <?php endforeach; ?>
  </ol>
</div>
<section class="padding-y text-white ">
  <div class="container">
    <div class="row">
      <?php foreach($templateParams["catego"] as $category):
      $parametro =$dbh->getProdottoByCategoria($category["idcategoria"]);
      foreach($parametro as $prodotto):?>
	    <div class="col-lg-3 col-md-6 col-sm-6 collapse collapse-horizontal" id="<?php echo $category["nomecategoria"]?>">
			  <figure class="card card-product-grid bg-dark rounded-6 shadow">
				    <div class="img-wrap"> 
              <img src="img/<?php
                $imgNoSpace = str_replace(' ', '', $prodotto["img"]);            //da togliere e sistemare l'immagine in php
                 echo $imgNoSpace?>.png" class="figure img-fluid" alt="..."/>
				    </div>
				      <figcaption class="info-wrap">
               <p class="title mb-2"><?php echo $prodotto["nome"]?></p>
					      <div class="price-wrap">
						      <span class="price text-end">Prezzo: <?php echo $prodotto["prezzo"] ?>€</span>
				    	  </div> 
                <p class="mb-2"><?php echo $prodotto["descrizione"]?></p>
					      <a href="#" class="btn btn-warning">Add to cart</a>
					      <a href="#" class="btn btn-light btn-icon text-end"><i class="fa fa-heart"></i> </a>
				      </figcaption>
			    </figure> 
      </div> 
    <?php endforeach; ?>
    <?php endforeach; */?>
  </div>
</section> -->

<div class="container-lg">
  <ol class="list-group">
    <?php foreach($templateParams["catego"] as $category):?>
      <li class="mt-3 bg-dark rounded-3 shadow text-white list-group-item d-flex justify-content-center align-items-start">
      <div class="ms-2 me-auto" data-bs-toggle="collapse" data-bs-target="#<?php echo $category["nomecategoria"]?>" aria-expanded="false" aria-controls="collapseWidthExample">
        <div class="fw-bold display-1"><?php echo $category["nomecategoria"]?></div>
      </div>
      <span class="badge"><i class='<?php echo $category["icona"] ?>' style='font-size:48px;color:rgb(247,193,68)'></i></span>
    </li>
    <?php endforeach ; ?>
  </ol>
</div>
<section class="padding-y text-white">
  <div class="container">
    <div class="row">
    <?php foreach($templateParams["catego"] as $category):
      $parametro =$dbh->getProdottoByCategoria($category["idcategoria"]);
      foreach($parametro as $prodotto):?>
      <div class="col-lg-3 col-md-6 col-sm-6 collapse collapse-horizontal" id="<?php echo $category["nomecategoria"]?>">
        <figure class="card card-product-grid bg-dark rounded-6 shadow">
          <div class="img-wrap">
          <img src="img/<?php
                $imgNoSpace = str_replace(' ', '', $prodotto["img"]);            //da togliere e sistemare l'immagine in php
                 echo $imgNoSpace?>.png" class="figure img-fluid" alt="..."/>
          </div>
          <figcaption class="info-wrap">
          <p class="title mb-2"><?php echo $prodotto["nome"]?></p>
					      <div class="price-wrap">
						      <span class="price text-end">Prezzo: <?php echo $prodotto["prezzo"] ?>€</span>
				    	  </div> 
                <p class="mb-2"><?php echo $prodotto["descrizione"]?></p>
					      <a href="#" class="btn btn-warning">Aggiungi al carrello</a>
					      <a href="#" class="btn btn-light btn-icon text-end"><i class="fa fa-heart"></i></a>
          </figcaption>
        </figure>
      </div>
    </div>
    <?php endforeach; ?>
    <?php endforeach; ?>
  </div>
</section>