
<!-- fine contenitore hero2 -->

<div class="container-lg">
  <ol class="list-group">
  <?php foreach($templateParams["catego"] as $category):?>
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
                              echo $imgNoSpace?>.png" class="figure img-fluid" alt="...">
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
    <?php endforeach; ?>
</div>

</section>



<!-- Va creato un array associativo con tutti i nomi delle categorie, e tramite un foreach faccio creare il titolo categoria preciso.
nel mentre che non ho la funziona per visualizzare niente, posso modificare alcune informazioni.--> 

<!-- <div class="container-lg"> 


  <ol class="list-group">
  <!-- va inserito qui dentro il foreach con la creazione dinamica dei contenitori per le categorie
  <li class="mt-3 bg-dark rounded-3 shadow-lg text-white list-group-item d-flex justify-content-center align-items-start">
      <div class="ms-2 me-auto" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" 
      aria-expanded="false" aria-controls="collapseWidthExample">
        <div class="fw-bold">Categoria 1</div>
       <p>Dettagli categoria</p> 
      </div>
      <span class="badge"><i class='mt-3 fas fa-hamburger fa-bounce' style='font-size:48px;color:rgb(247,193,68)'></i></span>
    </li>

    <li class="mt-3 rounded-5 shadow-lg bg-dark text-white list-group-item d-flex justify-content-between align-items-start">
      <div class="ms-2 me-auto">
        <div class="fw-bold">Categoria 2</div>
        <p>Dettagli categoria</p> 
      </div>
      <span class="badge"><i class='mt-3 fa-soli fa-french-fries fa-bounce'  style='font-size:48px;color:rgb(247,193,68)'></i></span>
    </li></span>
    </li>
    <li class="mt-3 rounded-5 shadow-lg bg-dark text-white list-group-item d-flex justify-content-between align-items-start">
      <div class="ms-2 me-auto">
        <div class="fw-bold">Categoria 3</div>
        <p>Dettagli categoria</p> 
      </div>
      <span class="badge ">14</span>
    </li>
  </ol>
</div>
    </div>
  </div> -->

<!-- footer qui -->

