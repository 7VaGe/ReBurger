<!-- <div class="container-lg my-5">
  <div class="row mx-4 p-4 pb-auto pe-lg-0 pt-lg-5 align-items-center">
    <table class="table table-dark table-hover table-striped border">
      <tr>
        <td>Cod.ID</td>
        <td>Nome</td>
        <td>descrizione</td>
        <td>Categoria</td>
        <td>Prezzo</td>
      </tr>
      <php foreach ($templateParams["prod"] as $prodotto):?>
        <tr>
          <td><a href="modificaProdotto.php?id=<php echo $prodotto["idprodotto"]?>"><php echo $prodotto["idprodotto"] ?></a></td>
          <td><a href="modificaProdotto.php?id=<php echo $prodotto["idprodotto"]?>"><php echo str_replace('_', ' ', $prodotto["nome"]) ?></a></td>
          <td><php echo $prodotto["descrizione"] ?></td><td><php echo $prodotto["categoria"] ?></td>
          <td><php echo $prodotto["prezzo"] ?></td>
      </tr>
      <php endforeach; ?>
    </table>
    <button class="my-2 btn-lg btn-outline-warning" onclick='window.location="nuovoProdotto.php"'>Aggiungi un prodotto</button>
  </div>
</div> -->

<div class="text-center mb-2 ">
  <span class="text-white display-4 fw-bold ">Aggiungi un prodotto</span>
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
  </div>
</div>

<div class="album mb-5 bg-dark text-white">
  <div class="text-center mb-4">
    <span class="text-white display-4 fw-bold mb-3">Lista prodotti</span>

    <div class="container" id="listaProdotti">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4 d-flex justify-content-center">
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
