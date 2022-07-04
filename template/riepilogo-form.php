<div class="text-center form-signin">
    <h1 class=" my-4 h3 mb-3 text-center text-white fw-normal">L'ordine contiene:</h1>
    <div class="container-lg">
    <?php foreach ($templateParams["ordine"] as $ordine){?>
        <h3 class=" my-4 h3 mb-3 text-white fw-normal"><?php echo $ordine["quantita"] . " " . $ordine["nome"];?></h3>
      <?php }
      if ($templateParams["stato"]["stato"]!=4){?>
      <h3 class=" my-4 h3 mb-3 text-white fw-normal">Stiamo lavorando sul tuo ordine</h3>
    <?php }else{?>
      <button class="btn btn-lg btn-warning mt-3" onclick="window.location='carrello.php?ordine=<?php echo $ordine['idordine'] ?>'">Riproponi ordine</button>
    <?php } ?>
  </div>
</div>
