<?php

require_once 'bootstrap.php';

if(isset($_POST["nomeCategoria"])){
  $dbh->insertCategoria($_POST["nomeCategoria"]);
}

if(isset($_GET["elimina"]) and isset($_GET["prodotto"])){
  $dbh->deleteProdotto($_GET["prodotto"]);
}

if(isset($_GET["elimina"]) and isset($_GET["categoria"])){
  $templateParams["prodotto"] = $dbh->getProdottoByCategoria($_GET["categoria"]);
  foreach ($templateParams["prodotto"] as $prodotto) {
    $dbh->deleteProdotto($prodotto["idprodotto"]);
  }
  $dbh->deleteCategoria($_GET["categoria"]);
}

$templateParams["titolo"] = "ReBurger";
$templateParams["nome"] = "mostra-prodotti.php";
$templateParams["categoria"] = $dbh->getCategories();

require_once 'template/base.php';
?>
