<?php

require_once 'bootstrap.php';

  $categoriaErr = "";

if(isset($_POST["nomeCategoria"])){
  $controlloErr = 0;
  $presente = $dbh->checkNomeCategoria($_POST["nomeCategoria"]);
  if ($presente!= false) {
    $categoriaErr = "Questo nome categoria è gia in uso";
    $controlloErr = 1;
  }if($controlloErr == 0){
    $dbh->insertCategoria($_POST["nomeCategoria"]);
  }

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

$templateParams["titolo"] = "ReBurger - Prodotti";
$templateParams["nome"] = "mostra-prodotti.php";
$templateParams["categoria"] = $dbh->getCategories();

require_once 'template/base.php';
?>
