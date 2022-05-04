<?php

require_once 'bootstrap.php';

$templateParams["titolo"] = "ReBurger";
$templateParams["nome"] = "mostra-prodotti.php";
$templateParams["prod"] = $dbh->getAllProdotti();

require_once 'template/base.php';
?>
