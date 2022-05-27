<div class="container-lg">
  <ol class="list-group">
    <?php foreach($templateParams["catego"] as $category):?>
      <li class="mt-3 bg-dark rounded-3 shadow text-white list-group-item d-flex justify-content-center align-items-start" data-bs-toggle="collapse" data-bs-target="#<?php echo $category["nomecategoria"]?>" aria-expanded="false" aria-controls="collapseWidthExample">
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
                $imgNoSpace = str_replace(' ', '', $prodotto["img"]);            //da togliere e sistemare l'immagine in php
                 echo $imgNoSpace?>" class="figure img-fluid  p-3" alt="..." style="height: 220px;"/>
          </div>
          <figcaption class="info-wrap px-3">
          <p class="title mb-2"><?php echo str_replace('_', ' ', $prodotto["nome"])?></p>
					      <div class="price-wrap">
						      <span class="price text-end">Prezzo: <?php echo $prodotto["prezzo"]?>€</span>
				    	  </div>
                <p class="mb-2"><?php echo $prodotto["descrizione"]?></p>
                <div class="text-center">
                  <button data-toggle="modal" data-target="<?php echo "#m".$prodotto["nome"]?>" class="btn btn-warning m-3">Aggiungi al carrello</button>
                </div>
                <!-- va inserito qui un effetto, o un feedback visivo per l'avvenuta aggiunta nel carrello, devo capire se posso usare un onclick="" oppure il codice si impalla,
                ad ogni modo quando viene aggiunto o metto un effetto o un messaggio in dissolvenza (fadein+fadeout o altro) -->
          </figcaption>
        </figure>
      </div>

      <?php endforeach; ?>
    <?php endforeach; ?>
    </div>

  </div>

  <?php foreach($templateParams["catego"] as $category):
    $parametro =$dbh->getProdottoByCategoria($category["idcategoria"]);
    foreach($parametro as $prodotto):?>
  <div id="<?php echo "m".$prodotto["nome"]?>" class="modal-fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><?php echo $prodotto["nome"]?></h4>
        </div>
        <form class="modal-form">
          <p><?php echo "p".$prodotto["nome"]?></p>
          <div class="form-floating d-flex">
            <input type="text" class="form-control my-2" id="nome" name="nome" value="<?php echo $prodotto["nome"]?>" hidden/> <!-- oninvalid="this.setCustomValidity('cambia messaggio')" puoi cambiare il messaggio d'errore-->
          </div>
          <div class="form-floating d-flex">
            <input type="number" class="form-control my-2" id="numero" name="numero" value="1"/> <!-- oninvalid="this.setCustomValidity('cambia messaggio')" puoi cambiare il messaggio d'errore-->
            <label for="floatingInput">Numero prodotti</label>
          </div>
          <button class="w-100 btn btn-lg btn-warning" type="submit">Inserisci</button>
        </form>
      </div>
    </div>
  </div>
<?php endforeach; ?>
<?php endforeach; ?>

  <div id="alert">
      <?php include 'alert-form.php' ?>
      </div>
</section>
<script src="script/alertHandler.js"></script>
