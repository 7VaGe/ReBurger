<div class="container-lg my-5">
  <form action="checkout.php" method="post">
  <div class="row mx-4 p-4 pb-auto pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg bg-white">
    <div class="col-lg-7-centered p-3 p-lg-5 pt-lg-3">
      <h1 class="display-4 fw-bold lh-1">Dettagli carta</h1>
      <div class="card-details">
        <div class="row">
          <div class="form-group col-sm-7">
            <label for="titolare">Titolare della carta</label>
            <input id="titolare" type="text" class="form-control" name="titolare" placeholder="Titolare della carta" aria-label="Titolare della carta">
          </div>
          <div class="form-group col-sm-5">
            <label for="">Data di scadenza</label>
            <div class="input-group expiration-date">
              <select class="form-control" name="mese" size="0">
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
              </select>
              <span class="date-separator"> / </span>
              <select class="form-control" name="anno" size="0">
                <option>2022</option>
                <option>2023</option>
                <option>2024</option>
                <option>2025</option>
                <option>2026</option>
                <option>2027</option>
              </select>
            </div>
          </div>
          <div class="form-group col-sm-8">
            <label for="numero">Numero carta</label>
            <input id="numero" type="text" class="form-control" name="numero" placeholder="Numero carta" aria-label="Numero carta">
          </div>
          <div class="form-group col-sm-4">
            <label for="cvc">CVC</label>
            <input id="cvc" type="text" class="form-control" name="cvc" placeholder="CVC" aria-label="CVC">
          </div>
          <div class="form-group col-sm-12">
            <div>Pagamento: € <?php echo $templateParams["conto"]["prezzo"]; ?></div>
            <button type="submit" class="btn btn-primary btn-block">Procedi</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  </form>
</div>
