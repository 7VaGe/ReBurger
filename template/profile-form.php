
  <div class="container-md ">
    <div class="mt-4 text-white text-center ">
      <div class="row col row-cols-1 row-cols-md-1 g-4">
        <div class="card bg-dark rounded-6 shadow">
          <?php foreach($templateParams["utente"] as $userInfo):?>
              <img class="rounded-circle mx-auto d-block my-2" src='img/<?php echo $userInfo["img"]; ?>' style="height: 200px; width: 200px;" />
              <div class="card-body">
                 <h5 class="card-title"><?php  echo strtoupper($userInfo["username"]);?></h5>
                 
                  <?php endforeach;?>
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
        </div>
      </div>
    </div>
   </div>
  </div>
