<?php

require_once 'bootstrap.php';
require_once 'inviaEmail.php';

$templateParams["titolo"] = "ReBurger - Registrati";
$templateParams["nome"] = "signup-form.php";

require_once 'template/base.php';
?>
