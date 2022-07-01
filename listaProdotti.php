<?php

require_once 'bootstrap.php';

if(isset($_POST["nomeCategoria"])){
  $dbh->insertCategoria($_POST["nomeCategoria"]);
}

if(isset($_GET["elimina"]) and isset($_GET["prodotto"])){
  $dbh->deleteProdotto($_GET["prodotto"]);
}

$templateParams["titolo"] = "ReBurger";
$templateParams["nome"] = "mostra-prodotti.php";
$templateParams["prod"] = $dbh->getAllProdotti();

require_once 'template/base.php';
?>
