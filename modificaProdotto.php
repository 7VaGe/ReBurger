<?php

require_once 'bootstrap.php';

$templateParams["titolo"] = "ReBurger";
$templateParams["nome"] = "modifica-prodotto.php";
$templateParams["prodotto"] = $dbh->getProdottoById($_GET["id"]);

require_once 'template/base.php';
?>
