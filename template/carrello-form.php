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
  <?php
        if( $templateParams["carrello"]== null){?>

        <div class="text-white text-center">
        <p class="title display-4 fw-bold text-center">Il carrello è vuoto</p>

        <img src="img\Carrellovuoto.png" alt="Carrello vuoto"/>

        <div class="mt-3">
        <button class="btn-lg btn-warning" onclick='window.location="menu.php"'>Effettua un ordine</button>
        </div>

          </div>
<?php } else { ?>

  <div class="text-white">
        <p class="title display-4 fw-bold text-center">Carrello</p>
        <table class="table table-dark table-hover table-striped border">
          <?php foreach ($templateParams["carrello"] as $prodotto):?>
          <tr id="<?php echo "riga".$prodotto["nome"]; ?>">
            <td><?php echo str_replace('_', ' ', $prodotto["nome"])?></td>
            <td><div class="input-group"><button class="input-group-addon btn btn-warning" value="<?php echo $prodotto["nome"]; ?>" onclick="sottraiCarrello(this.value);decVal(this.value);aggiornaCarrello();">-</button>
            <input type="number" id="<?php echo $prodotto["nome"]; ?>" class="form-control" readonly value="<?php echo $prodotto["quantita"] ?>">
            <button class="btn btn-warning input-group-addon" value="<?php echo $prodotto["nome"]; ?>" onclick="aggiungiCarrello(this.value);incVal(this.value);aggiornaCarrello();">+</button></div></td>
          </tr>
          <?php endforeach; ?>
        </table>
        <form action="pagamento.php" method="post">
        <p class="display-6">Seleziona la modalità di pagamento:</p>
        <input class="m-2" type="radio" id="pagamento1" name="pagamento" value="1" checked>
        <label class="m-2 display-6 fw-bold" for="pagamento1">Con carta <i class="fa-solid fa-credit-card"style="color:rgb(247,193,68)"></i></label>
        <br><input class="m-2" type="radio" id="pagamento2" name="pagamento" value="0">
        <label class="m-2 display-6 fw-bold" for="pagamento2">Contanti <i class="fa-solid fa-money-bill-wave" style="color:rgb(247,193,68)"></i></label>

        <div id="spesa">Prezzo totale: € <?php if ($templateParams["conto"]==NULL){
          echo "0";
        }else {

          echo $templateParams["conto"]["prezzo"]; }?></div>
      </div>
        <div class="footer">
          <?php if ($_SESSION["idutente"]==NULL){?>
          </form>
          <div class="mt-3 text-center">
              <button class="btn-lg btn-warning" onclick='window.location="login.php"'>Prima effettua il login</button>
          </div>

          <?php }else{ ?>
            <div class="text-center mt-3">
              <button type="submit" class="btn-lg btn-warning">Ordina</button>
            </div>

          <?php }; ?>
        </div>
      </form>
    </div>




<?php }?>

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
    ++document.getElementById(val).value;
    document.getElementById("spesa").innerhtml;
}

function decVal(val){
  var riga = 'riga'+val;
  document.getElementById(val).value--;
  if (document.getElementById(val).value == "0") {
    document.getElementById(riga).remove();
  }
  document.getElementById("spesa").innerhtml;
}

function aggiornaCarrello(){
  var xmlhttp = new XMLHttpRequest();

  xmlhttp.open("GET", "insertInCart.php?c=1", true);
  xmlhttp.send();
  xmlhttp.onreadystatechange = function() {
    document.getElementById("spesa").innerHTML = this.responseText;
  }

}
</script>
