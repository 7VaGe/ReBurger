<?php if (($templateParams["carta"]==NULL && $controllata==false)||($templateParams["carta"]!=NULL && $controllata==true)) {
    $dbh->updateStatoOrdine($_SESSION["ordine"]);
    $_SESSION["ordine"]=NULL;?>
<div class="container-lg mt-2">
  <div class="card bg-dark rounded-5 shadow-lg text-center">
    <div class="row mx-4 p-4 pb-auto pe-lg-0 pt-lg-5 align-items-center text-white">
      <div class="col-lg-12 p-3 p-lg-5 pt-lg-3">
        <h1 class="display-4 fw-bold lh-1">Ordine effettuato con successo</h1>
        <p class="lead">
          <cite>Gustati anche l'attesa ciccione</cite>
        </p> <!-- andrebbe inserito il riepilogo di quello che è stato preso con le immaginine piccole, la quantità
          e il totale,dato che faremo il carrello in php, dovebbe essere molto veloce la cosa, per il design poi ci penso io, basta che ho il carrello in php e non in js che non lo possiamo fare in js-->
          <div class="d-grid gap-2 d-md-flex justify-content-md-center mt-4">
            <button type="button" class="btn btn-warning" onclick='window.location="index.php"'>Torna alla Home</button>
          </div>
        </div>
      </div>
    </div>
</div>

<?php }else{ ?>

<div class="container-lg mt-2">
  <div class="card bg-dark rounded-5 shadow-lg text-center">
    <div class="row mx-4 p-4 pb-auto pe-lg-0 pt-lg-5 align-items-center text-white">
      <div class="col-lg-12 p-3 p-lg-5 pt-lg-3">
        <h1 class="display-4 fw-bold lh-1">Abbiamo riscontrato un problema con la carta</h1>
        <div class="d-grid gap-2 d-md-flex justify-content-md-center mt-4">
          <form class="" action="pagamento.php" method="post">
            <input type="text" id="pagamento" name="pagamento" value="1" hidden>
            <button type="submit" class="btn btn-warning">Torna al pagamento</button>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>

<?php } ?>
