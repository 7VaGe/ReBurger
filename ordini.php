<?php

require_once 'bootstrap.php';

$templateParams["titolo"] = "ReBurger - Profilo";
$templateParams["nome"] = "ordini-form.php";
$templateParams["ordine"] = $dbh->getOrdini();

require_once 'template/base.php';
?>
