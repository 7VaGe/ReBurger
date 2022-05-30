<?php

require_once 'bootstrap.php';

$templateParams["titolo"] = "ReBurger - Home";
$templateParams["nome"] = "carrello-form.php";
$templateParams["carrello"] = $dbh->getCarrello($_SESSION["ordine"]);
$templateParams["conto"] = $dbh->getPrezzoOrdine($_SESSION["ordine"]);

require_once 'template/base.php';

?>
