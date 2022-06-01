<?php

require_once 'bootstrap.php';

if (isset($_GET["ordine"]) and isset($_GET["scelta"])) {
  $comando=$_GET["scelta"];
  if ($comando=="accettato") {
    $dbh->updateStatoOrdine(2,$_GET["ordine"]);
  }elseif ($comando=="rifiutato") {
    $dbh->updateStatoOrdine(5,$_GET["ordine"]);
    }
}

$templateParams["titolo"] = "ReBurger - Profilo";
$templateParams["nome"] = "ordini-form.php";
$templateParams["ordine"] = $dbh->getOrdini();
$templateParams["utente"] = $dbh->getUtenteById($_SESSION["idutente"]);

require_once 'template/base.php';
?>
