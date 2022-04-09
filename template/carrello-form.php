<div class="list-group">
<?php
foreach ($templateParams["carrello"] as $carrello):
  $parametro =$dbh->getProdottoById($carrello["prodotto"]);
  foreach($parametro as $prodotto):?>

       <div class="list-group-item list-group-item-action d-flex gap-3 py-3">
          <img src="<?php echo $prodotto["img"] ?>" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
         <div class="d-flex gap-2 w-100 justify-content-between">
           <div>
             <h6 class="mb-0"><?php echo $prodotto["nome"] ?></h6>
             <p class="mb-0 opacity-75"><?php echo $prodotto["descrizione"] ?></p>
           </div>
           <small class="opacity-50 text-nowrap"><?php echo $prodotto["prezzo"] ?></small>
         </div>
       </div>
<?php endforeach;
      endforeach;?>
     </div>
