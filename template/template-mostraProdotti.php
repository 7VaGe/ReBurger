<div class="text-center mb-2 ">
  <span class="text-white display-4 fw-bold ">Aggiungi un prodotto o una categoria</span>
  <div class="container">
    <div class="row row-cols-1 row-cols-sm-2 d-flex justify-content-center align-items-center">

            <div class="col container wrapperAddItem m-4">
              <div class="bg-dark">
                <div class="card card-product-grid bg-dark rounded-6 shadow d-flex align-items-bottom">
                  <div class="imgWrapper" onclick='window.location="nuovoProdotto.php"'>
                    <img src="img/addItem.png" class="figure img-fluid p-5 " alt="..." style="height: 220px;" />
                  </div>
                  <div class="info-wrap px-3 m-3" id="front">
                    <button class=" mt-5 btn btn-warning" onclick='window.location="nuovoProdotto.php"'>Aggiungi un prodotto</button>
                </div>
              </div>
              </div>
            </div>
            <div class=" col container wrapperAddItem mx-4 my-3 bg-dark mt-2">
              <div class=" card card-product-grid bg-dark rounded-6 shadow d-flex align-items-bottom">
                <form class="" action="listaProdotti.php" method="post">
                <div class="imgWrapper">
                  <img src="img/addItem.png" class="figure img-fluid p-5 " alt="..." style="height: 220px;" />
                </div>
                <div class=" form-floating d-flex justify-content-center">
                  <input type="text" class="form-control mb-2 mx-5" id="nomeCategoria" name="nomeCategoria" required>
                  <label class="text-dark w-75" for="nomeCategoria">Nome categoria</label>
                </div>
                <span class="error d-block text-danger align-text-center"><?php echo $categoriaErr;?></span>
                  <button type="submit" class="btn mb-3 btn-warning">Aggiungi una categoria</button>

              </form>
              </div>
            </div>
    </div>
  </div>
</div>

<div class="album mb-5 bg-dark text-white">
  <div class="text-center  mt-5">
    <?php foreach ($templateParams["categoria"] as $categoria){
      $templateParams["prod"] = $dbh->getProdottoByCategoria($categoria["nomecategoria"]);
      ?>
    <span class="text-white display-4 fw-bold ">Lista <?php echo $categoria["nomecategoria"] ?> <button value="<?php echo $categoria["nomecategoria"]?>" onclick="eliminaCategoria(this.value);" class="btn btn-danger m-3"><i class="fa-solid fa-trash-can"></i></button></span>
    <div class="container-fluid">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4 d-flex justify-content-center my-3">
        <?php foreach($templateParams["prod"] as $prodotto){ ?>
          <div class="col wrapper m-4">
            <div class="bg-dark">
              <div class="card card-product-grid bg-dark rounded-6 shadow d-flex align-items-center">
                <div class="img-wrapper">
                  <img src="img/<?php $imgNoSpace = str_replace(' ', '', $prodotto["img"]);
                                echo $imgNoSpace?>" class="figure img-fluid p-5 " alt="<?php echo $prodotto["descrizione"];?>" style="height: 220px;"/>
                </div>
                <div class="info-wrap px-3">
                  <p class="title mb-2 pt-4 text-center fw-bold"><?php echo str_replace('_', ' ', $prodotto["nome"])?></p>
                  <div class="text-center mb-2 mt-5 d-flex justify-content-center">
                    <button onclick="window.location='modificaProdotto.php?id=<?php echo $prodotto['idprodotto']?>'" class="btn btn-warning m-3"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button value="<?php echo $prodotto["idprodotto"]?>" onclick="eliminaProdotto(this.value);" class="btn btn-danger m-3"><i class="fa-solid fa-trash-can"></i></button>
                  </div>
        </div>
        </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  <?php } ?>
  </div>
</div>


<script>
function eliminaProdotto(val) {
  if (confirm("Sei sicuro di voler rimuove questo prodotto dal tuo menù ?") == true) {
    window.location="listaProdotti.php?elimina=1&prodotto="+val;
  }
}

function eliminaCategoria(val) {
  if (confirm("Sei sicuro di voler rimuove questa categoria e tutti i suoi prodotti dal tuo menù ?") == true) {
    window.location="listaProdotti.php?elimina=1&categoria="+val;
  }
}
</script>
