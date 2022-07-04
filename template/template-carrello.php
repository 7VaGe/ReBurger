<div class="container-lg mt-2">
  <div class="card bg-dark rounded-5 shadow-lg">
    <div class="container-lg my-5">
      <?php
        if( $templateParams["carrello"]== null){?>

        <div class="text-white text-center">
          <p class="title display-4 fw-bold text-center">Il carrello è vuoto</p>

          <img src="img/Carrellovuoto.png" alt="" style="width:350px ">

          <div class="mt-3">
            <button class="btn-lg btn-warning" onclick='window.location="menu.php"'>Effettua un ordine</button>
          </div>

        </div>
      </div>
    </div>
  </div>
<?php } else { ?>

  <div class="text-white">
        <p class="title display-4 fw-bold text-center">Carrello</p>
        <table class="table table-dark table-hover table-striped border">
          <?php foreach ($templateParams["carrello"] as $prodotto):
            $prodotto["nome"] = str_replace(' ', '_', $prodotto["nome"])?>
          <tr id="<?php echo "riga".$prodotto["nome"]; ?>">
            <td><?php echo str_replace('_', ' ', $prodotto["nome"])?></td>
            <td><div class="input-group"><button class="input-group-addon btn btn-warning" value="<?php echo $prodotto["nome"]; ?>" onclick="sottraiCarrello('<?php echo str_replace('_', ' ', $prodotto["nome"]); ?>');decVal(this.value);">-</button>
            <input type="number" id="<?php echo $prodotto["nome"]; ?>" class="form-control" readonly value="<?php echo $prodotto["quantita"] ?>">
            <label for="<?php echo $prodotto["nome"]; ?>" hidden><?php echo $prodotto["nome"]; ?></label>
            <button class="btn btn-warning input-group-addon" value="<?php echo $prodotto["nome"]; ?>" onclick="aggiungiCarrello('<?php echo str_replace('_', ' ', $prodotto["nome"]); ?>');incVal(this.value);">+</button></div></td>
          </tr>
          <?php endforeach; ?>
        </table>
        <form action="pagamento.php" method="post">
          <p class="display-6">Seleziona la modalità di pagamento:</p>
          <input class="m-2" type="radio" id="pagamento1" name="pagamento" value="1" checked>
          <label class="m-2 display-6 fw-bold" for="pagamento1">Con carta <i class="fa-solid fa-credit-card" style="color:rgb(253,193,64)"></i></label>
          <br><input class="m-2" type="radio" id="pagamento2" name="pagamento" value="0">
          <label class="m-2 display-6 fw-bold" for="pagamento2">Contanti <i class="fa-solid fa-money-bill-wave" style="color:rgb(253,193,64)"></i></label>

          <div class="text-center display-6" id="spesa">Prezzo totale: € <?php if ($templateParams["conto"]==NULL){
            echo "0";
          }else {
            echo $templateParams["conto"]["prezzo"]; }?>
          </div>
          <?php if ($_SESSION["idutente"]==NULL){?>
        </form>
        <div class="footer">
          <div class="mt-3 text-center">
            <button class="btn-lg btn-warning" onclick='window.location="login.php"'>Prima effettua il login</button>
          </div>
        </div>
          <?php }else{ ?>
          <div class="footer">
            <div class="text-center mt-3">
              <button type="submit" class="btn-lg btn-warning">Ordina</button>
            </div>
          </div>
        </form>
        <div class="text-center mt-3">
          <button class="btn-lg btn-danger centered" onclick="svuotaCarrello()">Svuota il Carrello</button>
        </div>
          <?php }; ?>
        </div>
    </div>
  </div>
</div>
<?php }?>

<script>
function aggiungiCarrello(val) {
    var http = new XMLHttpRequest();
    http.open("get", "insertInCart.php?a="+val, true);
    http.send();
    http.onload = function(){
      document.getElementById("spesa").innerHTML = this.responseText;
    }
}

function sottraiCarrello(val) {
    var http = new XMLHttpRequest();
    http.open("get", "insertInCart.php?s="+val, true);
    http.send();
    http.onload = function() {
      document.getElementById("spesa").innerHTML = this.responseText;
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

function svuotaCarrello(){
  if (confirm("Sei sicuro di voler svuotare il carrello ?") == true) {
    window.location="carrello.php?del=1";
  }
}

</script>
