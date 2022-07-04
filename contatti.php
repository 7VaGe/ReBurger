<?php

require_once 'bootstrap.php';

$templateParams["titolo"] = "ReBurger - About";
$templateParams["nome"] = "template-contatti.php";
$templateParams["info"] = $dbh->getInfoVenditore();

require_once 'template/base.php';
?>
