<?php

require_once 'bootstrap.php';

$templateParams["titolo"] = "ReBurger - Modifica Ristorante";
$templateParams["nome"] = "template-modificaContatti.php";
$templateParams["info"] = $dbh->getInfoVenditore();

require_once 'template/base.php';
?>
