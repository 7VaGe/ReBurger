<div class="container-lg ">
    <div class="mt-4 text-white text-center ">
      <div class="row col row-cols-1 row-cols-md-1 g-4">
        <div class="card bg-dark rounded-6 shadow">
          <div class="container">
              <div class="card-body">
                  <h5 class="card-title text-white text-center">Ciao <?php echo strtoupper($templateParams["utente"]["username"]); ?>, qui puoi visualizzare lo storico degli ordini ricevuti</h5>
                  <div class="accordion" id="accordionExample">
                    <?php foreach($templateParams["ordine"] as $ordine) :?>
                      <div class="accordion-item bg-dark">
                        <h2 class="accordion-header" id="heading<?php echo $ordine["idordine"];?>">

                        <!-- Divido qui i vari ordini per stato --->
                        <?php if($ordine["stato"] != 1 && $ordine["stato"] != 2 && $ordine["stato"] !=3):?>
                          <button class="accordion-button collapsed bg-dark text-white border-0 rounded-3" id="btnOrd" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $ordine["idordine"];?>" aria-expanded="true" aria-controls="collapse<?php echo $ordine["idordine"];?>">
                            Ordine #<?php echo $ordine["idordine"];?>
                            </button>
                            <?php else:?>
                              <button class="accordion-button collapsed bg-warning text-white border-0 rounded-3" id="btnOrd" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $ordine["idordine"];?>" aria-expanded="true" aria-controls="collapse<?php echo $ordine["idordine"];?>">
                            Ordine #<?php echo $ordine["idordine"];?>
                            </button>
                            <?php endif;?>
                          </h2>
                          <div id="collapse<?php echo $ordine["idordine"];?>" class="accordion-collapse collapse " aria-labelledby="heading<?php echo $ordine["idordine"];?>" data-bs-parent="#accordionExample">
                            <div class="accordion-body text-white text-center ">
                              <div class=" col-12 d-flex row">
                                <p class="col-sm">Utente: <?php echo $ordine["pagamento"];?></p>
                                <p class="col-sm">Data: <?php echo $ordine["data_ordine"];?></p>
                                <p class="col-sm">Ora: <?php echo $ordine["ora_ordine"];?></p>
                              </div>
                              <div>
                              <p class="col">Pagamento: <?php switch ($ordine["pagamento"]){
                                                              case '0':
                                                              echo "Alla consegna";
                                                              break;
                                                              case '1':
                                                              echo "Carta";
                                                              break;
                                                              }
                                                              ?></p>
                              </div>
                              <div class="container d-flex justify-content-center">
                              <?php if($ordine["stato"]==1){
            ?>
            <button class="btn-warning btn" onclick="window.location='dettagliOrdine.php?ordine=<?php echo $ordine['idordine'] ?>'">Accetta ordine</button>
            <?php } elseif($ordine["stato"]==2) {?>
            <button class="btn-warning btn" onclick="window.location='dettagliOrdine.php?ordine=<?php echo $ordine['idordine'] ?>'">Spedisci ordine</button>
            <?php}elseif($ordine["stato"]==3) {?>
              <button class="btn-warning btn" onclick="window.location='dettagliOrdine.php?ordine=<?php echo $ordine['idordine'] ?>'">Consegnato</button>
            <?php}else {
            switch ($ordine["stato"]){
              case '4':
                echo "Completato";
                break;
              case '5':
                echo "Rifiutato";
                break;
              case '0':
                echo "Elaborazione";
                break;}
          }?>
                    </div>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
         </div>
        </div>
      </div>
    </div>
  </div>
</div>
     