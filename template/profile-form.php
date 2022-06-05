  <div class="container-lg ">
    <div class="mt-4 text-white text-center ">
      <div class="row col row-cols-1 row-cols-md-1 g-4">
        <div class="card bg-dark rounded-6 shadow">
          <div class="container">
          <style>
                    .container {
                      position: relative;
                    }

                    .image {
                      opacity: 1;
                      display: block;
                      width: 200px;
                      height: 200px;
                      transition: .5s ease;

                    }

                    .middle {
                      transition: .5s ease;
                      opacity: 0;
                      position: absolute;
                      top: 50%;
                      left: 50%;
                      transform: translate(-50%, -50%);
                      -ms-transform: translate(-50%, -50%);
                      text-align: center;
                    }

                    .container:hover .image-rounded-circle {
                      opacity: 0.1;
                    }

                    .container .middle:hover {
                      opacity: 1;
                    }

</style>
          <img class="rounded-circle mx-auto d-block my-2 img-fluid" src='img/<?php echo $templateParams["utente"]["img"]?>' style="width: 200px; height:200px;"/>
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
                            <button class="accordion-button collapsed  bg-dark text-white border-0 rounded-3" id="btnOrd" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $orderInfo["idordine"];?>" aria-expanded="true" aria-controls="collapse<?php echo $orderInfo["idordine"];?>">
                            Ordine #<?php echo $orderInfo["idordine"];?> <?php if($orderInfo["stato"]!=4):?><span class='position-absolute top-0 start-100 translate-middle p-2 bg-danger  rounded-circle'>
                              <span class='visually-hidden'> </span>
                              </span>
                              <?php endif; ?>
                            </button>
                          </h2>
                          <div id="collapse<?php echo $orderInfo["idordine"];?>" class="accordion-collapse collapse " aria-labelledby="heading<?php echo $orderInfo["idordine"];?>" data-bs-parent="#accordionExample">
                            <div class="accordion-body text-white">
                            <div class="col-12 d-flex">
                             <p class="col">Data: <?php echo $orderInfo["data_ordine"];?></p>
                             <p class="col">Ora: <?php echo $orderInfo["ora_ordine"];?></p>
                             <p class="col">Pagamento: <?php echo $orderInfo["pagamento"];?></p>
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
                                        $msg = "Il tuo ordine è stato consegnato al rider, arriverà presto!";
                                        break;
                                      case '4':
                                        echo "w-100 bg-success";
                                        $msg = "Il tuo ordine è stato consegnato!";
                                        break;
                                      case '5':
                                        echo "w-100 bg-danger";
                                        $msg = "Il tuo ordine è stato rifiutato!";
                                        break;
                        }
                          ?>" role="progressbar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100">
                          </div>
                          </div>
                        </div>
                        <p class="display-6 text-white mt-4">  <?php echo $msg ;?></p>
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
  <script>
   /* function notifyStateChange(val){
      var btn = document.getElementById("#btnOrd");
      stato = $dbh->getStatoOrdine(val);
      if(btn){
        $.ajax({
          type:'post',
          url: 'notifiche.php',
          data:{
            ordine:stato,
           }success: function(response){
            btn.append().html(response);
           }
        });
      }
    //puoi fare un else inserendo qualcosa se non cambia lo stato..
    }*/
  </script>
