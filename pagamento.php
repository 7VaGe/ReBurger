<?php

require_once 'bootstrap.php';

$templateParams["titolo"] = "ReBurger - Pagamento";
//$address= $dbh->getEmail($_SESSION["idutente"]);
//$msg="Ordine completato con successo";
if ($_POST["pagamento"]==1) {
  $dbh->setPagamentoOrdine($_POST["pagamento"], $_SESSION["ordine"]);
  $templateParams["nome"] = "pagamento-form.php";
  $templateParams["conto"] = $dbh->getPrezzoOrdine($_SESSION["ordine"]);

}else{
  $dbh->setPagamentoOrdine($_POST["pagamento"], $_SESSION["ordine"]);
  $templateParams["nome"] = "checkout-form.php";
  $templateParams["carta"]=NULL;
  $controllata=false;

}

require_once 'template/base.php';
?>
