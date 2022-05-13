<?php

require_once 'bootstrap.php';

$templateParams["titolo"] = "ReBurger";
$address= $dbh->getEmail($_SESSION["idutente"]);
$msg="Ordine completato con successo";
if ($_POST["pagamento"]==1) {

  $templateParams["nome"] = "pagamento-form.php";

}else{

  $templateParams["nome"] = "checkout-form.php";
  mail($address,"Ordine confermato",$msg);

}

require_once 'template/base.php';
?>
