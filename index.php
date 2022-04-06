<?php

require_once 'bootstrap.php';

$templateParams["titolo"] = "ReBurger - Home";
$templateParams["nome"] = "home.php";
$templateParams["notizia"] = $dbh->getNews();

require_once 'template/base.php';
?>
