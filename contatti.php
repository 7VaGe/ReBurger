<?php

require_once 'bootstrap.php';

$templateParams["titolo"] = "ReBurger - Home";
$templateParams["nome"] = "contatti-form.php";
$templateParams["info"] = $dbh->getInfoVenditore();
require_once 'template/base.php';
?>
