<div class="text-center mb-2 ">
  <span class="text-white display-4 fw-bold ">Aggiungi un prodotto o una categoria</span>
  <div class="container d-flex justify-content-center">
    <div class="container wrapperAddItem m-4">
      <div class="bg-dark">
        <figure class="card card-product-grid bg-dark rounded-6 shadow d-flex align-items-bottom" id="cardProdotto">
          <div class="imgWrapper" onclick='window.location="nuovoProdotto.php"'>
            <img src="img/addItem.png" class="figure img-fluid p-5 " alt="..." style="height: 220px;" />
          </div>
          <div class="front">
            <figcaption class="info-wrap px-3 m-3" id="front">
              <button class=" btn btn-warning" onclick='window.location="nuovoProdotto.php"'>Aggiungi un prodotto</button>
            </figcaption>
          </div>
        </figure>
      </div>
    </div>
    <div class="container wrapperAddItem m-4 bg-dark">
      <div class="card card-product-grid bg-dark rounded-6 shadow d-flex align-items-bottom" id="cardClasse">
        <form class="" action="" method="post">
        <div class="imgWrapper">
          <img src="img/addItem.png" class="figure img-fluid p-5 " alt="..." style="height: 220px;" />
        </div>
          <input type="text" class="form-control" id="nomeCategoria" name="nomeCategoria" required>
        <div class="front">
          <button type="submit" class="btn btn-warning">Aggiungi una categoria</button>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>

<div class="album mb-5 bg-dark text-white">
  <div class="text-center mb-4">
    <span class="text-white display-4 fw-bold">Lista prodotti</span>

    <div class="container-fluid" id="listaProdotti">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4 d-flex justify-content-center my-3">
        <?php foreach($templateParams["prod"] as $prodotto) : ?>
          <div class="col wrapper m-4" id="<?php echo $prodotto["nome"]; ?>">
            <div class="bg-dark">
              <figure class="card card-product-grid bg-dark rounded-6 shadow d-flex align-items-center" id="cardProdotto">
                <div class="img-wrapper">
                  <img src="img/<?php $imgNoSpace = str_replace(' ', '', $prodotto["img"]);
                                echo $imgNoSpace?>" class="figure img-fluid p-5 " alt="..." style="height: 220px;"/>
                </div>
                <div class="front">
                  <figcaption class="info-wrap px-3" id="front">
                    <p class="title mb-2 pt-4 text-center fw-bold"><?php echo str_replace('_', ' ', $prodotto["nome"])?></p>
                    <div class="text-center mb-2 mt-5 d-flex justify-content-center">
                      <button onclick="window.location='modificaProdotto.php?id=<?php echo $prodotto['idprodotto']?>'" class="btn btn-warning m-3" id="editCard" ><i class="fa-solid fa-pen-to-square"></i></button>
                      <button value="<?php echo $prodotto["idprodotto"]?>" onclick="eliminaProdotto(this.value);" class="btn btn-danger m-3" id="deleteCard" ><i class="fa-solid fa-trash-can"></i></button>
                    </div>
                  </figcaption>
                </div>
              </figure>   <!-- chiudi figure -->
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>
<script>
function eliminaProdotto(val) {
  if (confirm("Sei sicuro di voler rimuove questo prodotto dal tuo menù ?") == true) {
    window.location="listaProdotti.php?elimina=1&prodotto="+val;
  }else {

  }
}
</script>
