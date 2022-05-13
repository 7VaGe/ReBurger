<div class="" id="cart" tabindex="-1" role="dialog">
  <div class="container-lg my-5">
    <div class="row mx-4 p-4 pb-auto pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg bg-white">
        <h5 class="title" id="cartLabel">Carrello</h5>
      <div class="body">
        <table class="show-cart table">

        </table>
        <form action="pagamento.php" method="post">
        <p>Seleziona la modalità di pagamento:</p><input type="radio" id="pagamento1" name="pagamento" value="1" checked><label for="pagamento1">Con carta</label><br><input type="radio" id="pagamento2" name="pagamento" value="0"><label for="pagamento2">Alla consegna</label><br>
        <div>Prezzo totale: €<span class="total-cart"></span></div>
      </div>
        <div class="footer">
          <?php if ($_SESSION["idutente"]==NULL){?>
          </form>
            <button class="btn btn-primary" onclick='window.location="login.php"'>Prima effettua il login</button>
          <?php }else{ ?>
            <button type="submit" class="btn btn-primary" onclick='window.location="pagamento.php"'>Ordina</button>
          <?php }; ?>
        </div>
      </form>
    </div>
  </div>
</div>
