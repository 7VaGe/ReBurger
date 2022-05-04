<?php

require_once 'bootstrap.php';

if (isset($_GET["idprodotto"]) and isset($_GET["nome"]) and isset($_GET["descrizione"]) and isset($_GET["categoria"]) and isset($_GET["prezzo"])) {
    $dbh->updateProdotto($_GET["nome"], $_GET["descrizione"], $_GET["categoria"], $_GET["prezzo"], $_GET["idprodotto"]);
  }

$templateParams["titolo"] = "ReBurger";
$templateParams["nome"] = "mostra-prodotti.php";
$templateParams["prod"] = $dbh->getAllProdotti();

require_once 'template/base.php';
?>
