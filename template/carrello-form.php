<style>
input[type='radio']:after {
        width: 15px;
        height: 15px;
        border-radius: 15px;
        top: -2px;
        left: -1px;
        position: relative;
        background-color: #d1d3d1;
        content: '';
        display: inline-block;
        visibility: visible;
        border: 2px solid white;
    }

    input[type='radio']:checked:after {
        width: 15px;
        height: 15px;
        border-radius: 15px;
        top: -2px;
        left: -1px;
        position: relative;
        background-color: rgb(247,193,68);
        content: '';
        display: inline-block;
        visibility: visible;
        border: 2px solid white;
    }
</style>

<div class="container-lg mt-2">
<div class="card bg-dark rounded-5 shadow-lg">
  <div class="container-lg my-5">
    <div class="align-items-center text-white">
        <h5 class="title display-4 fw-bold">Carrello</h5>

        <table class="table table-dark table-hover table-striped border">
          <?php foreach ($templateParams["carrello"] as $prodotto):?>
          <tr id="<?php echo "riga".$prodotto["nome"]; ?>">
            <td><?php echo str_replace('_', ' ', $prodotto["nome"])?></td>
            <td><div class="input-group"><button class="input-group-addon btn btn-warning" value="<?php echo $prodotto["nome"]; ?>" onclick="sottraiCarrello(this.value);decVal(this.value);">-</button>
            <input type="number" id="<?php echo $prodotto["nome"]; ?>" class="form-control" readonly value="<?php echo $prodotto["quantita"] ?>">
            <button class="btn btn-warning input-group-addon" value="<?php echo $prodotto["nome"]; ?>" onclick="aggiungiCarrello(this.value);incVal(this.value);">+</button></div></td>
          </tr>
          <?php endforeach; ?>
        </table>
        <form action="pagamento.php" method="post">
        <p class="display-6">Seleziona la modalità di pagamento:</p>
        <input class="m-2" type="radio" id="pagamento1" name="pagamento" value="1" checked>
        <label class="m-2 display-6 fw-bold" for="pagamento1">Con carta <i class="fa-solid fa-credit-card"style="color:rgb(247,193,68)"></i></label>
        <br><input class="m-2" type="radio" id="pagamento2" name="pagamento" value="0">
        <label class="m-2 display-6 fw-bold" for="pagamento2">Contanti<i class="fa-solid fa-money-bill-wave" style="color:rgb(247,193,68)"></i></label>

        <div id="spesa">Prezzo totale: € <?php if ($templateParams["conto"]==NULL){
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

function incVal(val){

    var x = document.getElementById(val).value;
    document.getElementById(val).value = ++x;
    document.getElementById("spesa").innerhtml.reload;
}

function decVal(val){

  var riga = 'riga'+val;
  var x = document.getElementById(val).value;
  document.getElementById(val).value = x - 1;
  if (document.getElementById(val).value == "0") {
    document.getElementById(riga).remove();
  }
  document.getElementById("spesa").innerhtml.reload;
}
</script>
