<?php

require_once 'bootstrap.php';

$templateParams["titolo"] = "ReBurger - Modifica profilo";
$templateParams["nome"] = "upload.php";
$templateParams["ordine"] = $dbh->getOrdiniByCliente($_SESSION["idutente"]);
$templateParams["utente"] = $dbh->getUtenteById($_SESSION["idutente"]);

require_once 'template/base.php';
?>
