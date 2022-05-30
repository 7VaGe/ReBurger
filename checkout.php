<?php

require_once 'bootstrap.php';

$templateParams["carta"]  = $dbh->checkCarta($_POST["titolare"], $_POST["numero"], $_POST["cvc"]);
$_POST["titolare"] = NULL; $_POST["numero"]= NULL; $_POST["cvc"]= NULL; $_POST["pagamento"]=1;
$templateParams["titolo"] = "ReBurger";
$templateParams["nome"] = "checkout-form.php";

$templateParams["carta"]  = NULL;
require_once 'template/base.php';
?>
