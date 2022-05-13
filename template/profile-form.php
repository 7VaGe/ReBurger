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
                          <form id="mio-modulo" method="post" action="profile.php" enctype="multipart/data">
                          <!--<input type="file" accept="immmagini/*" class="d-none" id="inputFile" ></input>-->
                            <button onclick="document.getElementById('mio-modulo').submit();" class="btn btn-warning" id="btn-file" ><i class="fa-solid fa-image"></i></button>
                        </form>
                </div>
          </div>

<?php endforeach;?>
          <div class="card-body">
              <h5 class="card-title"><?php  echo strtoupper($userInfo["username"]);?></h5>
              <table class="table table-dark table-hover table-striped">
              <thead>
                <tr>
                  <th scope="col">Ordine</th>
                  <th scope="col">Data</th>
                  <th scope="col">Ora</th>
                  <th scope="col">Pagamento</th>
                </tr> <!-- Prima  è fissa senza php-->
              </thead>
              <tbody>
                <?php foreach($templateParams["ordine"] as $orderInfo) :?>
                <tr>
                  <th scope="row" headers="Ordine "><?php echo $orderInfo["idordine"]?></th>
                  <td headers="Data"><?php echo $orderInfo["data_ordine"]?></td>
                  <td headers="Ora"><?php echo $orderInfo["ora_ordine"]?></td>
                  <td headers="Pagamento"><?php echo $orderInfo["pagamento"]?></td>
                </tr>
              </tbody>
              <?php endforeach; ?>
            </table>
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
