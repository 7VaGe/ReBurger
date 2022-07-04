<div class="text-center form-signin">
    <h1 class=" my-4 h3 mb-3 text-center text-white fw-normal">L'ordine contiene:</h1>
    <div class="container-lg">
    <?php foreach ($templateParams["ordine"] as $ordine):?>
      <h3 class=" my-4 h3 mb-3 text-white fw-normal"><?php echo $ordine["quantita"] . " ". $ordine["nome"];?></h3>
    <?php endforeach;?>
    <?php if ($templateParams["stato"]["stato"]==1){
      ?><form class="" action="ordini.php" method="get">
          <label for="ora" class="text-white">Seleziona un'ora di arrivo</label>
          <input id="ora" name="ora" type="time" ></input>
          <input id="ordine" name="ordine" type="number" value="<?php echo $ordine["idordine"]?>" hidden></input>
          <input id="scelta" name="scelta" type="text" value="accettato" hidden></input>
          <button class="btn btn-lg btn-warning mt-3" type="submit">Accetta ordine</button>
      </form><?php
    }elseif ($templateParams["stato"]["stato"]==2) {
      ?><form class="" action="ordini.php" method="get">
          <label for="ora" class="text-white">Seleziona un'ora di arrivo</label>
          <input id="ora" name="ora" type="time" ></input>
          <input id="ordine" name="ordine" type="number" value="<?php echo $ordine["idordine"]?>" hidden></input>
          <input id="scelta" name="scelta" type="text" value="spedito" hidden></input>
          <button class="btn btn-lg btn-warning mt-3" type="submit">Ordine spedito</button>
      </form><?php
    }elseif ($templateParams["stato"]["stato"]==3) {
      ?><button class="btn btn-lg btn-warning" onclick="window.location='ordini.php?ordine=<?php echo $ordine['idordine']?>&scelta=consegnato'">Ordine consegnato</button><?php
    }?>
    <button class="btn btn-lg btn-danger mt-2" onclick="window.location='ordini.php?ordine=<?php echo $ordine['idordine']?>&scelta=annullato'">Annulla</button>
    </div>
</div>
