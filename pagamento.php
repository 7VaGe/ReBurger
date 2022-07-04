<?php

require_once 'bootstrap.php';

$templateParams["titolo"] = "ReBurger - Pagamento";

if ($_POST["pagamento"]==1) {
  $dbh->setPagamentoOrdine($_POST["pagamento"], $_SESSION["ordine"]);
  $templateParams["nome"] = "pagamento-form.php";
  $templateParams["conto"] = $dbh->getPrezzoOrdine($_SESSION["ordine"]);

}else{
  $dbh->setPagamentoOrdine($_POST["pagamento"], $_SESSION["ordine"]);
  $templateParams["nome"] = "template-checkout.php";
  $templateParams["carta"]=NULL;
  $controllata=false;

}

require_once 'template/base.php';
?>
