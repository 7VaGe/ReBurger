<?php

require_once 'bootstrap.php';
require_once 'inviaEmail.php';

$templateParams["titolo"] = "Invio newsletter";
$templateParams["nome"] = "newsletter-form.php";

require_once 'template/base.php';

?>
