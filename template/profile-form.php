<div class="container">
    <div class="main-body">
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src=" " alt="Admin" class="rounded-circle" width="150">

                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      Kenneth Valdez
                    </div>
                  </div>
                </div>
                </div>
              </div>

              <div class="row gutters-sm">
                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <table>
                        <tr><td>Nome</td><td>Matricola</td></tr>
                        <?php foreach ($templateParams["referral"] as $referral):?>
                          <tr><td><?php echo $referral["idinvitato"] ?></td><td><?php echo $referral["matinvitato"] ?></td></tr>
                        <?php endforeach; ?>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <table>
                      <tr><td>Data</td><td>Ora</td><td>stato</td><td>pagamento</td></tr>
                      <?php foreach ($templateParams["ordine"] as $ordine):?>
                        <tr><td><?php echo $ordine["data_ordine"] ?></td><td><?php echo $ordine["ora_ordine"] ?></td><td><?php echo $ordine["stato"] ?></td><td><?php echo $ordine["pagamento"] ?></td></tr>
                      <?php endforeach; ?>
                    </table>
                    </div>
                  </div>
                </div>
              </div>



            </div>
          </div>
