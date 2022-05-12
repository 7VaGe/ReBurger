<?php

require_once 'bootstrap.php';

$templateParams["titolo"] = "ReBurger";

if ($_POST["pagamento"]==1) {

  $templateParams["nome"] = "pagamento-form.php";

}else{

  $templateParams["nome"] = "checkout-form.php";
  
}

require_once 'template/base.php';
?>
