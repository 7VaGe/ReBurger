<div class="container-lg mt-2">
<div class="card bg-dark rounded-6 shadow-lg" >
<?php foreach ($templateParams["utente"] as $utente):?>
<h5 class=" mt-3 card-title text-white text-center">Ciao <?php echo strtoupper($utente["username"]); ?>, qui puoi visualizzare lo storico degli ordini ricevuti</h5>
<?php endforeach;?>
  <div class=" mx-4 pe-lg-0 pt-lg-5 align-items-center">
    <table class="table table-dark table-hover table-striped">
      <tr><td>Utente</td><td>Data</td><td>Ora</td><td>stato</td><td>pagamento</td></tr>
      <?php foreach ($templateParams["ordine"] as $ordine):?>
        <tr>
          <td><?php echo $ordine["utente"] ?></td>
          <td><?php echo $ordine["data_ordine"] ?></td>
          <td><?php echo $ordine["ora_ordine"] ?></td>
          <td><?php if($ordine["stato"]==1){
            ?><button class="btn-warning btn" onclick="window.location='dettagliOrdine.php?ordine=<?php echo $ordine["idordine"] ?>'">Accetta ordine</button><?php
          }else {
            switch ($ordine["stato"])
            {
              case '4':
                echo "Completato";
                break;
              case '3':
                echo "In arrivo";
                break;
              case '2':echo "Accettato";
                break;
              case '5':
                echo "Rifiutato";
                break;
              case '0':
                echo "Elaborazione";
                break;}
          }?></td>
          <td><?php switch ($ordine["pagamento"]){
            case '0':
            echo "Alla consegna";
            break;
            case '1':
            echo "Carta";
            break;
            }
            ?></td>
      </tr>
      <?php endforeach; ?>
       </table>
    </div>
    </div>
</div>
