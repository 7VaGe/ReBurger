  <div class="container-lg ">
    <div class="mt-4 text-white text-center ">
      <div class="row col row-cols-1 row-cols-md-1 g-4">
        <div class="card bg-dark rounded-6 shadow">
          <?php foreach($templateParams["utente"] as $userInfo):?>
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



                        <img class="rounded-circle mx-auto d-block my-2 img-fluid" src='img/<?php echo $userInfo["img"]?>' style="width: 200px; height:200px;"/>
                        <div class="middle" id="wrap-btn">
                         <!--
                         non sono sicuro ma questo doppio form, penso sia sbagliato, da sostituire con un collegamento a profile.php
                         e poi usare il form vero e proprio da profile.php che rimanda a upload, che contiene il form effettivo delle modifiche.
                         <form id="mio-modulo" method="post" action="profile.php" enctype="multipart/form-data">-->
                            <button onclick="window.location='profile.php'" class="btn btn-warning" id="btn-file" ><i class="fa-solid fa-image"></i></button>
                      <!-- </form>-->
                </div>
          </div>

<?php endforeach;?>
          <div class="card-body">
              <h5 class="card-title"><?php echo strtoupper($userInfo["username"]);?></h5>
              <div class="container-lg col-12">
                <?php foreach($templateParams["ordine"] as $orderInfo) :?>
                  <div class="accordion accordion-flush " id="accordion">                     
                    <div class="accordion-item bg-dark">                    
                      <h2 class="accordion-header" id="flush-heading<?php echo $orderInfo["idordine"];?>">
                        <button class="accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $orderInfo["idordine"];?>" aria-expanded="false" aria-controls="flush-collapse<?php echo $orderInfo["idordine"];?>">
                          Ordine #<?php echo $orderInfo["idordine"];?>
                        </button>
                      </h2>
                      <div id="flush-collapse<?php echo $orderInfo["idordine"];?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?php echo $orderInfo["idordine"];?>" data-bs-parent="#accordion">
                        <div class="accordion-body "> 
                          <div class="col-12 d-flex">
                             <p class="col">Data: <?php echo $orderInfo["data_ordine"];?></p>
                             <p class="col">Ora: <?php echo $orderInfo["ora_ordine"];?></p>
                             <p class="col">Pagamento: <?php echo $orderInfo["pagamento"];?></p>
                          </div>
                          <div class="container d-flex justify-content-center">                     
                            <div class="progress mt-2 w-50 ">
                          <div class="progress-bar progress-bar-striped progress-bar-animated <?php switch($orderInfo["stato"]){
                                      case '0':
                                        echo "w-25 bg-warning";
                                        $msg = "Il tuo ordine è stato approvato ed è in preparazione!";
                                        break;
                                      case '1':
                                        echo "w-50 bg-warning";
                                        $msg = "Il tuo ordine è stato consegnato al rider, arriverà presto!";
                                        break;
                                      case '2':
                                        echo "w-75 bg-warning";
                                        $msg = "Il tuo ordine è in consegna!";
                                        break;  
                                      case '3':
                                        echo "w-100 bg-warning";
                                        $msg = "Il tuo ordine è stato consegnato!";
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
                          ?>" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                          </div> 
                          </div>
                        </div>
                         <p class="display-6 text-white mt-4">  <?php echo $msg ;?></p>
                          </div>
                          
                      </div>
                    </div>
                  </div>
                  <?php endforeach; ?>
                </div>
          </div>
          <div class="card-body">
              <table class="table table-dark table-hover table-striped">
              <thead>
                <tr>
                  <th scope="col">IDinvitato</th>
                  <th scope="col">Matricola</th>
                </tr> <!-- Prima  è fissa senza php-->
              </thead>
              <tbody>
                <?php foreach($templateParams["referral"] as $referralInfo) :?>
                <tr>
                  <th><?php echo $referralInfo["idinvitato"]?></th>
                  <td><?php echo $referralInfo["matinvitato"]?></td>
                </tr>
              </tbody>
              <?php endforeach; ?>
            </table>
          </div>
        </div>
      </div>
    </div>
   </div>
  </div>
<!-- 
<table class="table table-dark table-hover table-striped dropdown">
              <thead>
                <tr>
                  <th scope="col">Ordine</th>
                  <th scope="col">Data</th>
                  <th scope="col">Ora</th>
                  <th scope="col">Pagamento</th>
                </tr>Prima  è fissa senza php
              </thead>
              <tbody>
                
                <tr onclick="">
                  <th scope="row" headers="Ordine "> echo $orderInfo["idordine"]?></th>
                  <td headers="Data"> echo $orderInfo["data_ordine"]?></td>
                  <td headers="Ora"> echo $orderInfo["ora_ordine"]?></td>
                  <td headers="Pagamento"> echo $orderInfo["pagamento"]?></td>
                </tr>
              </tbody>
             
            </table>

-->

