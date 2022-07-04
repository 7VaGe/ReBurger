<?php

require_once 'bootstrap.php';
if (isset($_POST["titolare"]) && isset($_POST["numero"]) && isset($_POST["cvc"])) {
  $templateParams["carta"]  = $dbh->checkCarta($_POST["titolare"], $_POST["numero"], $_POST["cvc"], $_POST["scadenza"]);
  $controllata=true;
}else {
  $templateParams["carta"] = NULL;
  $controllata=false;
}
$templateParams["titolo"] = "ReBurger - Checkout";
$templateParams["nome"] = "template-checkout.php";

require_once 'template/base.php';
?>
