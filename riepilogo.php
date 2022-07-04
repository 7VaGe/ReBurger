<?php

require_once 'bootstrap.php';

$templateParams["titolo"] = "ReBurger - Riepilogo ordine";
$templateParams["nome"] = "riepilogo-form.php";
$templateParams["ordine"] = $dbh->getCarrello($_GET["ordine"]);
$templateParams["stato"] = $dbh->getStatoOrdine($_GET["ordine"]);

require_once 'template/base.php';

?>
