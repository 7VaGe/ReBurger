<?php

require_once 'bootstrap.php';

$templateParams["titolo"] = "ReBurger - Home";
$templateParams["nome"] = "ristorante.php";

$templateParams["catego"] =$dbh->getCategories();

require_once 'template/base.php';
?>
