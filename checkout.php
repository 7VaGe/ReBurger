<?php

require_once 'bootstrap.php';

$templateParams["titolo"] = "ReBurger";
$templateParams["nome"] = "checkout-form.php";
mail($address,"Ordine confermato",$msg);

require_once 'template/base.php';
?>
