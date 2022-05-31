<?php

require_once 'bootstrap.php';
if (isset($_POST["titolare"]) && isset($_POST["numero"]) && isset($_POST["cvc"])) {
  $templateParams["carta"]  = $dbh->checkCarta($_POST["titolare"], $_POST["numero"], $_POST["cvc"]);
  $_POST["titolare"] = NULL; $_POST["numero"]= NULL; $_POST["cvc"]= NULL;
  $controllata=true;
}else {
  $templateParams["carta"] = NULL;
  $_POST["titolare"] = NULL; $_POST["numero"]= NULL; $_POST["cvc"]= NULL;
  $controllata=false;
}
$templateParams["titolo"] = "ReBurger";
$templateParams["nome"] = "checkout-form.php";

require_once 'template/base.php';
?>
