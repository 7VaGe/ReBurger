<?php

require_once 'bootstrap.php';
require_once 'inviaEmail.php';

if (isset($_GET["ordine"]) and isset($_GET["scelta"])) {
  $comando=$_GET["scelta"];
  switch ($comando) {
    case "accettato":
      $dbh->updateOrdine($_GET["ora"], 2, $_GET["ordine"]);
      $utenteOrdine=$dbh->getClienteByOrdine($_GET["ordine"]);
      $cliente=$dbh->getUtenteById($utenteOrdine["utente"]);
      inviaMail($cliente["username"], $cliente["email"], "Conferma ordine", "Il suo ordine è in preparazione, arrivo stimato per le: ".$_GET["ora"]);

      break;
    case "annullato":
      $dbh->updateStatoOrdine(5,$_GET["ordine"]);
      $utenteOrdine=$dbh->getClienteByOrdine($_GET["ordine"]);
      $cliente=$dbh->getUtenteById($utenteOrdine["utente"]);
      inviaMail($cliente["username"], $cliente["email"], "Annullamento ordine", "Il suo ordine è stato annullato, le chiediamo di tornare da noi un'altrogiorno. ");

      break;
    case "spedito":
      $dbh->updateOrdine($_GET["ora"], 3, $_GET["ordine"]);
      $utenteOrdine=$dbh->getClienteByOrdine($_GET["ordine"]);
      $cliente=$dbh->getUtenteById($utenteOrdine["utente"]);
      inviaMail($cliente["username"], $cliente["email"], "Ordine spedito", "Il suo ordine è stato spedito, arrivo stimato per le: ".$_GET["ora"]);

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

require_once 'template/base.php';
?>
