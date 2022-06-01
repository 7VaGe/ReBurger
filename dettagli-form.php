<div class="text-center form-signin">
    <h1 class=" my-4 h3 mb-3 text-center text-white fw-normal">L'ordine contiene:</h1>
    <div class="container-lg">
    <?php foreach ($templateParams["ordine"] as $ordine):?>
      <h3 class=" my-4 h3 mb-3 text-white fw-normal"><?php echo $ordine["quantita"] . " ". $ordine["nome"];?></h3>
    <?php endforeach;?>
    <?php if ($templateParams["stato"]["stato"]==1){
      ?><button class="w-100 btn btn-lg btn-warning" onclick="window.location='ordini.php?ordine=<?php echo $ordine["idordine"]?>&scelta=accettato'">Accetta ordine</button><?php
    }elseif ($templateParams["stato"]["stato"]==2) {
      ?><button class="w-100 btn btn-lg btn-warning" onclick="window.location='ordini.php?ordine=<?php echo $ordine["idordine"]?>&scelta=spedito'">Ordine spedito</button><?php
    }elseif ($templateParams["stato"]["stato"]==3) {
      ?><button class="w-100 btn btn-lg btn-warning" onclick="window.location='ordini.php?ordine=<?php echo $ordine["idordine"]?>&scelta=consegnato'">Ordine consegnato</button><?php
    }?>
    <button class="w-100 btn btn-lg btn-danger mt-2" onclick="window.location='ordini.php?ordine=<?php echo $ordine["idordine"]?>&scelta=annullato'">Annulla</button>
    </div>
</div>
