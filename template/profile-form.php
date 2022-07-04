  <div class="container-lg ">
    <div class="mt-4 text-white text-center ">
      <div class="row col row-cols-1 row-cols-md-1 g-4">
        <div class="card bg-dark rounded-6 shadow">
          <div class="container" id="ContainerProfilo">
                  <img class="rounded-circle mx-auto d-block my-2 img-fluid" src='img/<?php echo $templateParams["utente"]["img"]?>' alt="..." style="width: 200px; height:200px;"/>
                  <div class="middle" id="wrap-btn">
                    <button onclick="window.location='profile.php'" class="btn btn-warning" id="btn-file" ><i class="fa-solid fa-image"></i></button>
                  </div>
                </div>
                <div class="card-body">
                  <h5 class="card-title"><?php echo strtoupper($templateParams["utente"]["username"]);?></h5>
                  <div class="accordion" id="accordionExample">
                    <?php foreach($templateParams["ordine"] as $orderInfo) :?>
                      <div class="accordion-item bg-dark ">
                        <h2 class="accordion-header" id="heading<?php echo $orderInfo["idordine"];?>">
                        <?php if($orderInfo["stato"] == 1 || $orderInfo["stato"] == 2 || $orderInfo["stato"] ==3):?>
                          <button class="accordion-button collapsed bg-warning text-white border-0 rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $orderInfo["idordine"];?>" aria-expanded="true" aria-controls="collapse<?php echo $orderInfo["idordine"];?>">
                            Ordine #<?php echo $orderInfo["idordine"];?>
                            <?php elseif($orderInfo["stato"] == 5):?>
                              <button class="accordion-button collapsed bg-danger text-white border-0 rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $orderInfo["idordine"];?>" aria-expanded="true" aria-controls="collapse<?php echo $orderInfo["idordine"];?>">
                            Ordine #<?php echo $orderInfo["idordine"];?>
                            <?php else:?>
                              <button class="accordion-button collapsed bg-dark text-white border-0 rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $orderInfo["idordine"];?>" aria-expanded="true" aria-controls="collapse<?php echo $orderInfo["idordine"];?>">
                            Ordine #<?php echo $orderInfo["idordine"];?>
                            <?php endif;?>
                          <!--<button class="accordion-button collapsed  bg-dark text-white border-2 rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $orderInfo["idordine"];?>" aria-expanded="true" aria-controls="collapse<?php echo $orderInfo["idordine"];?>">
                            Ordine #<php echo $orderInfo["idordine"];?>
                            </button> -->
                          </h2>
                          <div id="collapse<?php echo $orderInfo["idordine"];?>" class="accordion-collapse collapse " aria-labelledby="heading<?php echo $orderInfo["idordine"];?>" data-bs-parent="#accordionExample">
                            <div class="accordion-body text-white">
                              <div class="col-12 d-flex">
                                <p class="col">Pagamento: <?php switch ($orderInfo["pagamento"]){
                                                                case '0':
                                                                echo "Alla consegna";
                                                                break;
                                                                case '1':
                                                                echo "Carta";
                                                                break;
                                                                }
                                                                ?></p>
                                <p class="col">Ora: <?php echo $orderInfo["ora_ordine"];?></p>
                                <p class="col">Prezzo: <?php echo $orderInfo["prezzo"];?>€</p>
                              </div>
                              <div class="container d-flex justify-content-center">
                                <div class="progress mt-2 w-50 ">
                                  <div class="progress-bar progress-bar-striped progress-bar-animated <?php switch($orderInfo["stato"]){
                                      case '0':
                                        echo "w-0 bg-warning";
                                        $msg = "Completa il tuo ordine";
                                        break;
                                      case '1':
                                        echo "w-25 bg-warning";
                                        $msg = "Il tuo ordine è in fase di approvazione";
                                        break;
                                      case '2':
                                        echo "w-50 bg-warning";
                                        $msg = "Il tuo ordine è stato approvato ed è in preparazione!";
                                        break;
                                      case '3':
                                        echo "w-75 bg-warning";
                                        $msg = "Il tuo ordine è stato consegnato al rider, arriverà alle: ".$orderInfo["ora_consegna"];
                                        break;
                                      case '4':
                                        echo "w-100 bg-success";
                                        $msg = "Il tuo ordine è stato consegnato!";
                                        break;
                                      case '5':
                                        echo "w-100 bg-danger";
                                        $msg = "Il tuo ordine è stato rifiutato!";
                                        break;
                        }?>" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                      </div>
                    </div>
                  </div>
                  <p class="display-6 text-white mt-4">  <?php echo $msg ;?></p>
                  <button class="btn-warning btn mb-3" onclick="window.location='riepilogo.php?ordine=<?php echo $orderInfo['idordine'] ?>'">Dettagli ordine</button>
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
