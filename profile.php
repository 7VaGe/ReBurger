<?php

require_once 'bootstrap.php';

$templateParams["titolo"] = "ReBurger - Modifica profilo";
$templateParams["nome"] = "upload.php";
$templateParams["utente"] = $dbh->getUtenteById($_SESSION["idutente"]);

require_once 'template/base.php';
?>
