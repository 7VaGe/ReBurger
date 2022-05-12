<div class="container-lg my-5">
  <div class="row mx-4 p-4 pb-auto pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg bg-white">
    <table>
      <tr><td>Cod.ID</td><td>Nome</td><td>Ingredienti</td><td>Categoria</td><td>Prezzo</td></tr>
      <?php foreach ($templateParams["prod"] as $prodotto):?>
        <tr><td><a href="modificaProdotto.php?id=<?php echo $prodotto["idprodotto"]?>"><?php echo $prodotto["idprodotto"] ?></a></td><td><a href="modificaProdotto.php?id=<?php echo $prodotto["idprodotto"]?>"><?php echo str_replace('_', ' ', $prodotto["nome"]) ?></a></td><td><?php echo $prodotto["descrizione"] ?></td><td><?php echo $prodotto["categoria"] ?></td><td><?php echo $prodotto["prezzo"] ?></td></tr>
      <?php endforeach; ?>
    </table>
    <button class="my-2 btn-lg btn-outline-primary" onclick='window.location="nuovoProdotto.php"'>Aggiungi un prodotto</button>
  </div>
</div>
