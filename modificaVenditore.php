<?php

require_once 'bootstrap.php';

$templateParams["titolo"] = "ReBurger";
$templateParams["nome"] = "modifica-contatti.php";
$templateParams["info"] = $dbh->getInfoVenditore();

require_once 'template/base.php';
?>
