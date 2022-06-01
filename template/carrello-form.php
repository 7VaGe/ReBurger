<div class="container-lg mt-2">
<div class="card bg-dark rounded-5 shadow-lg">
<div class="" id="cart" tabindex="-1" role="dialog">
  <div class="container-lg my-5">
    <div class="row mx-4 p-4 pb-auto pe-lg-0 pt-lg-5 align-items-center text-white">
        <h5 class="title display-4 fw-bold" id="cartLabel">Carrello</h5>
      <div class="body">
        <table class="table table-dark table-hover table-striped border">
          <?php foreach ($templateParams["carrello"] as $prodotto):?>
          <tr>
            <td><?php echo str_replace('_', ' ', $prodotto["nome"])?></td>
            <td><div class="input-group"><button class="input-group-addon btn btn-warning" value="<?php echo $prodotto["nome"]; ?>" onclick="sottraiCarrello(this.value)" onclick="decValue()">-</button>
            <input type="number" id="<?php echo $prodotto["nome"]; ?>" class="form-control" readonly value="<?php echo $prodotto["quantita"] ?>">
            <button class="btn btn-warning input-group-addon" value="<?php echo $prodotto["nome"]; ?>" onclick="aggiungiCarrello(this.value)" onclick="incValue()">+</button></div></td>
          </tr>
          <?php endforeach; ?>
        </table>
        <form action="pagamento.php" method="post">
        <p class="display-6">Seleziona la modalità di pagamento:</p>
        <input class="m-2" type="radio" id="pagamento1" name="pagamento" value="1" checked>
        <label class="m-2 display-6 fw-bold" for="pagamento1">Con carta <i class="fa-solid fa-credit-card"style="color:rgb(247,193,68)"></i></label>
        <br><input class="m-2" type="radio" id="pagamento2" name="pagamento" value="0">
        <label class="m-2 display-6 fw-bold" for="pagamento2">Alla consegna <i class="fa-solid fa-money-bill-wave" style="color:rgb(247,193,68)"></i></label>

        <div>Prezzo totale: € <?php if ($templateParams["conto"]==NULL){
          echo "0";
        }else {
          echo $templateParams["conto"]["prezzo"]; }?></div>
      </div>
        <div class="footer">
          <?php if ($_SESSION["idutente"]==NULL){?>
          </form>
            <button class="btn btn-warning" onclick='window.location="login.php"'>Prima effettua il login</button>
          <?php }else{ ?>
            <div class="align-items-center">
              <button type="submit" class="btn btn-warning mt-5">Ordina</button>
            </div>

          <?php }; ?>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
</div>

<script>
function aggiungiCarrello(val) {
    var http = new XMLHttpRequest();
    http.open("get", "insertInCart.php?a="+val, true);
    http.send();
    http.onload = function(){
    }
}

function sottraiCarrello(val) {
    var http = new XMLHttpRequest();
    http.open("get", "insertInCart.php?s="+val, true);
    http.send();
    http.onload = function() {
    }
}
</script>
