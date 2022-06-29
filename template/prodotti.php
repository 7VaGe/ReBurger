<div class="container-lg">
  <ol class="list-group">
    <?php foreach($templateParams["catego"] as $category):?>
      <li class="mt-3 bg-dark rounded-3 shadow text-white list-group-item d-flex justify-content-center align-items-start" id="list<?php echo $category['nomecategoria']?>" onclick="setFocusTo('<?php echo $category['nomecategoria']?>', this.value, 'list<?php echo $category['nomecategoria']?>')" data-bs-toggle="collapse" data-bs-target="#<?php echo $category["nomecategoria"]?>" aria-expanded="false" aria-controls="collapseWidthExample" value="0">
        <div class="ms-2 me-auto">
          <div class="fw-bold display-1"><?php echo $category["nomecategoria"]?></div>
        </div>
        <span class="badge"><i class='<?php echo $category["icona"]?>' style='font-size:48px;color:rgb(247,193,68)'></i></span>
      </li>
    <?php endforeach ; ?>
  </ol>
</div>
<section class="padding-y text-white">
  <div class="container">
    <div class="row mt-3">
    <?php foreach($templateParams["catego"] as $category):
      $parametro =$dbh->getProdottoByCategoria($category["idcategoria"]);
      foreach($parametro as $prodotto):?>
      <div class="col-lg-3 col-md-6 col-sm-6 collapse collapse-horizontal" id="<?php echo $category["nomecategoria"]?>">
        <figure class="card card-product-grid bg-dark rounded-6 shadow">
          <div class="img-wrap text-center">
          <img src="img/<?php
                $imgNoSpace = str_replace(' ', '', $prodotto["img"]);           
                 echo $imgNoSpace?>" class="figure img-fluid  p-3" alt="..." style="height: 220px;"/>
          </div>
          <figcaption class="info-wrap p-3">
          <p class="title mb-2"><?php echo str_replace('_', ' ', $prodotto["nome"])?></p>
					      <div class="price-wrap">

						      <span class="price text-end">Prezzo: <?php echo $prodotto["prezzo"]?>€</span>
				    	  </div>
                <p class="mb-2"><?php echo $prodotto["descrizione"]?></p>
                  <button class="w-100 btn btn-lg btn-warning" value="<?php echo $prodotto["nome"]?>" onclick="insertInCarrello(this.value)">Aggiungi al carrello</button>
          </figcaption>
        </figure>
      </div>

      <?php endforeach; ?>
    <?php endforeach; ?>
    </div>
  </div>
</section>
<script>
function insertInCarrello(val) {
    var http = new XMLHttpRequest();
    http.open("get", "insertInCart.php?p="+val, true);
    http.send();
    http.onload = function() {
        alert(http.responseText);
    }
}
 function setFocusTo(val, aperto, indice){
   var visione = document.getElementById(val);
   if (aperto=="0") {
     visione.focus();
     visione.scrollIntoView();
     document.getElementById(indice).value='1';
   }else {
     document.getElementById(indice).value='0';
   }
 }
</script>
