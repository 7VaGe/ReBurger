<?php

require_once 'bootstrap.php';

$templateParams["titolo"] = "ReBurger - Dettagli Ordine";
$templateParams["nome"] = "template-dettagli.php";
$templateParams["ordine"] = $dbh->getCarrello($_GET["ordine"]);
$templateParams["stato"] = $dbh->getStatoOrdine($_GET["ordine"]);

require_once 'template/base.php';
?>
