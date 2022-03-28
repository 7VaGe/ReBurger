<?php

require_once 'bootstrap.php';

$templateParams["titolo"] = "ReBurger - Home";
$templateParams["nome"] = "house.php";
$templateParams["notizia"] = $dbh->getNews();

require_once 'template/base.php';
?>
