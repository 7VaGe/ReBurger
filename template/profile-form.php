<?php /* foreach ($templateParams["utente"] as $profilo):?>
<div class="container">
    <div class="main-body">
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="<?php echo $profilo["img"] ?>" alt="Admin" class="rounded-circle" width="200">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Username</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $profilo["username"] ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $profilo["email"] ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">N. Telefono</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $profilo["telefono"] ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Pagamento</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $profilo["pagamento"] ?>
                    </div>
                  </div>
                </div>
                </div>
              </div>
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
<?php endforeach; */?>
         <!--   </div>
          </div>

          <section >
            <h2 class="text-white"> Utente <?php /*echo $_SESSION["username"]; */?> Loggato! </h2>
          </section>-->


  <div class="container-xxl">
    <div class="mt-4 text-white">
      <div class="row col row-cols-1 row-cols-md-1 g-4">
        <div class="card bg-dark rounded-6 shadow">
        <img class="rounded-circle" src="<?php echo $_SESSION["img"];?>">
              <div class="card-body">
                 <h5 class="card-title"><?php echo $_SESSION["username"]; ?></h5>
                  <p class="card-text"><?php echo $_SESSION["idutente"]; ?></p>
                  <!--<p class="text-end">Prezzo: € <?php/* echo $prodotto["prezzo"] */?></p>-->
              </div>
        </div>
      </div>
    </div>
   </div>
  </div>
