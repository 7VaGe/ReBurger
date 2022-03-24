<?php

require_once 'bootstrap.php';

$templateParams["titolo"] = "ReBurger - Home";
$templateParams["nome"] = "ristorante.php";

$templateParams["catego"] =$dbh->getCategories();
$templateParams["prod"] =$dbh->getProdotto();

require_once 'template/fondamentale.php';
?>
