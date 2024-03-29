<div class="container-lg my-5">
  <form action="checkout.php" method="post">
  <div class="row mx-4 p-4 pb-auto pe-lg-0 pt-lg-5 align-items-center rounded-3 shadow-lg bg-dark text-white">
    <div class="col-lg-7-centered p-3 p-lg-5 pt-lg-3">
      <h1 class="display-4 fw-bold lh-1">Dettagli carta</h1>
      <div class="card-details">
        <div class="row">
          <div class="form-group col-sm-7">
            <label for="titolare">Titolare della carta</label>
            <input id="titolare" type="text" class="form-control" name="titolare" placeholder="Titolare della carta" aria-label="Titolare della carta" required>
          </div>
          <div class="form-group col-sm-5">
            <label>Data di scadenza</label>
            <input id="scadenza" type="month" class="form-control" name="scadenza" required>
          </div>
          <div class="form-group col-sm-8">
            <label for="numero">Numero carta</label>
            <input id="numero" type="text" class="form-control" name="numero" placeholder="Numero carta" aria-label="Numero carta " maxlength="16" required>
          </div>
          <div class="form-group col-sm-4">
            <label for="cvc">CVC</label>
            <input id="cvc" type="text" class="form-control" name="cvc" placeholder="CVC" aria-label="CVC">
          </div>
          <div class="form-group col-12 mt-3  d-flex justify-content-center" id="credit_cards" >
            <img class="img-fluid img mx-2" alt="..." src="img/visa.png" id="visa" style="width:75px;">
            <img class="img-fluid img mx-2" alt="..." src="img/mastercard.png" id="mastercard" style="width:75px;">
            <img class="img-fluid img mx-2" alt="..." src="img/paypal.png" id="paypal" style="width:75px;">
          </div>
          <div class="form-group col-6 col-sm-12 d-flex justify-content-between">
            <div class="mt-3 display-5 fw-bold ">Pagamento:  <?php echo $templateParams["conto"]["prezzo"]; ?>€</div>
            <button type="submit" class="mx-2 btn btn-warning mt-2 ">Procedi</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
</div>

<script src="script/checkinput.js"></script>
