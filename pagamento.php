<?php

require_once 'bootstrap.php';

$templateParams["titolo"] = "ReBurger";
//$address= $dbh->getEmail($_SESSION["idutente"]);
//$msg="Ordine completato con successo";
if ($_POST["pagamento"]==1) {
  $dbh->setPagamentoOrdine($_POST["pagamento"], $_SESSION["ordine"]);
  $templateParams["nome"] = "pagamento-form.php";
  $templateParams["conto"] = $dbh->getPrezzoOrdine($_SESSION["ordine"]);

}else{
  $dbh->setPagamentoOrdine($_POST["pagamento"], $_SESSION["ordine"]);
  $templateParams["nome"] = "checkout-form.php";
  //mail($address,"Ordine confermato",$msg);

}

require_once 'template/base.php';
?>
