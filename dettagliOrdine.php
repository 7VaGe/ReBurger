<?php

require_once 'bootstrap.php';

$templateParams["titolo"] = "ReBurger - Home";
$templateParams["nome"] = "dettagli-form.php";
$templateParams["ordine"] = $dbh->getCarrello($_GET["ordine"]);

require_once 'template/base.php';
?>
