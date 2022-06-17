<?php

require_once 'bootstrap.php';

if (isset($_GET["ordine"]) and isset($_GET["scelta"])) {
  $comando=$_GET["scelta"];
  switch ($comando) {
    case "accettato":
      $dbh->updateStatoOrdine(2,$_GET["ordine"]);
      break;
    case "annullato":
      $dbh->updateStatoOrdine(5,$_GET["ordine"]);
      break;
    case "spedito":
      $dbh->updateStatoOrdine(3,$_GET["ordine"]);
      $dbh->setOraOrdine($_GET["ora"],$_GET["ordine"]);
      break;
    case "consegnato":
      $dbh->updateStatoOrdine(4,$_GET["ordine"]);
      break;


    default:

      break;
  }
}

$templateParams["titolo"] = "ReBurger - Profilo";
$templateParams["nome"] = "ordini-form.php";
$templateParams["ordine"] = $dbh->getOrdini();
$templateParams["utente"] = $dbh->getUtenteById($_SESSION["idutente"]);

require_once 'template/base.php';
?>
