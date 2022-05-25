<?php

require_once 'bootstrap.php';

$templateParams["titolo"] = "ReBurger - Home";
$templateParams["nome"] = "home.php";
$templateParams["notizia"] = $dbh->getNews();
$templateParams["infoVenditore"]= $dbh->getInfoVenditore();
$templateParams["catego"] =$dbh->getCategories();
$templateParams["prodottoRandom"]= $dbh->getRandomProdotto(4);

require_once 'template/base.php';
?>
