<div class="text-center">
    <div class=" my-4 h3 mb-3 text-center text-white fw-normal">L'ordine contiene:</div>
    <div class="container-lg">
    <?php foreach ($templateParams["ordine"] as $ordine):?>
      <div class=" my-4 h3 mb-3 text-white fw-normal"><?php echo $ordine["quantita"] . " ". $ordine["nome"];?></div>
    <?php endforeach;?>
    <?php if ($templateParams["stato"]["stato"]==1){
      ?><form class="" action="ordini.php" method="get">
          <label for="ora" class="text-white">Seleziona un'ora di arrivo</label>
          <input id="ora" name="ora" type="time" required></input>
          <input id="ordine" name="ordine" type="number" value="<?php echo $ordine["idordine"]?>" hidden></input>
          <label for="ordine" hidden>Ordine</label>
          <input id="scelta" name="scelta" type="text" value="accettato" hidden></input>
          <label for="scelta" hidden>Scelta</label>
          <div class="d-flex justify-content-center ">
            <button class="btn btn-lg btn-warning mt-3" type="submit">Accetta ordine</button>
    </div>
      </form><?php
    }elseif ($templateParams["stato"]["stato"]==2) {
      ?><form class="" action="ordini.php" method="get">
          <label for="ora" class="text-white">Seleziona un'ora di arrivo</label>
          <input id="ora" name="ora" type="time"></input>
          <input id="ordine" name="ordine" type="number" value="<?php echo $ordine["idordine"]?>" hidden></input>
          <label for="ordine" hidden>Ordine</label>
          <input id="scelta" name="scelta" type="text" value="spedito" hidden></input>
          <label for="scelta" hidden>Scelta</label>
          <div class="d-flex justify-content-center ">
            <button class="text-center btn btn-lg btn-warning mt-3" type="submit">Ordine spedito</button>
          </div>
          
      </form><?php
    }elseif ($templateParams["stato"]["stato"]==3) {
      ?>  <div class="d-flex justify-content-center "><button class="btn btn-lg btn-warning" onclick="window.location='ordini.php?ordine=<?php echo $ordine['idordine']?>&scelta=consegnato'">Ordine consegnato</button></div><?php
    }?>
    <button class="btn btn-lg btn-danger mt-2" onclick="window.location='ordini.php?ordine=<?php echo $ordine['idordine']?>&scelta=annullato'">Annulla</button>
    </div>
    
</div>
