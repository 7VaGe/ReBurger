<?php

require_once 'bootstrap.php';

$templateParams["titolo"] = "ReBurger - Prodotti";
$templateParams["nome"] = "prodotti.php"; 

$templateParams["catego"] =$dbh->getCategories();

require_once 'template/base.php';
?>
