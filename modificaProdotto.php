<?php

require_once 'bootstrap.php';

$templateParams["titolo"] = "ReBurger - Modifica Prodotto";
$templateParams["nome"] = "template-modificaProdotto.php";
$templateParams["prodotto"] = $dbh->getProdottoById($_GET["id"]);

require_once 'template/base.php';
?>
