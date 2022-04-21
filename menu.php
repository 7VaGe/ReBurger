<?php

require_once 'bootstrap.php';

$templateParams["titolo"] = "ReBurger - Home";
$templateParams["nome"] = "prodotti.php"; //cambiato per prova era ristorante.php

$templateParams["catego"] =$dbh->getCategories();

require_once 'template/base.php';
?>
