
  <div class="container-md ">
    <div class="mt-4 text-white text-center ">
      <div class="row col row-cols-1 row-cols-md-1 g-4">
        <div class="card bg-dark rounded-6 shadow img-center">
          <?php foreach($templateParams["utente"] as $userInfo):?>

             <img class="rounded-circle mx-auto d-block my-2" src="img/<?php echo $userInfo["img"]; ?>" style="height: 200px; width: 200px";/> 
              <div class="card-body">
                 <h5 class="card-title"><?php echo $userInfo["username"]; ?></h5>
                 
                  <?php endforeach;?>
                  <table class="table table-dark table-hover table-striped">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Handle</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Larry the Bird</td>
                      <td>@twitter</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                </table>
              </div>
        </div>
      </div>
    </div>
   </div>
  </div>
