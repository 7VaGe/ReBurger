<?php

require_once 'bootstrap.php';

$templateParams["titolo"] = "ReBurger - Home";
$templateParams["nome"] = "profile-form.php";
$templateParams["ordine"] = $dbh->getOrdiniByCliente(3);
$templateParams["referral"] = $dbh->getReferal(3);
$templateParams["utente"] = $dbh->getUtenteById(3);

require_once 'template/base.php';
?>
