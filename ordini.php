<?php

require_once 'bootstrap.php';

$templateParams["titolo"] = "ReBurger - Profilo";
$templateParams["nome"] = "ordini-form.php";
$templateParams["ordine"] = $dbh->getOrdini();
$templateParams["utente"] = $dbh->getUtenteById($_SESSION["idutente"]);

require_once 'template/base.php';
?>
