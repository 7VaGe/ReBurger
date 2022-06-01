<div class="text-center form-signin">
    <h1 class=" my-4 h3 mb-3 text-center text-white fw-normal">L'ordine contiene:</h1>
    <div class="container-lg">
    <?php foreach ($templateParams["ordine"] as $ordine):?>
      <h3 class=" my-4 h3 mb-3 text-white fw-normal"><?php echo $ordine["nome"]." X ".$ordine["quantita"];?></h3>
    <?php endforeach;?>
    <button class="w-100 btn btn-lg btn-warning" onclick="window.location='ordini.php?ordine=<?php echo $ordine["idordine"]?>&scelta=accettato'">Accetta</button>
    <button class="w-100 btn btn-lg btn-warning" onclick="window.location='ordini.php?ordine=<?php echo $ordine["idordine"]?>&scelta=rifiutato'">Rifiuta</button>
    </div>
</div>
