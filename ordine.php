<?php

require_once 'bootstrap.php';

$templateParams["titolo"] = "ReBurger - Home";
$templateParams["nome"] = "carrello.php";
$templateParams["carrello"] = $dbh->getCarrello(2);

require_once 'template/base.php';
?>
