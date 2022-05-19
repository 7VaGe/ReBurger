<?php

require_once 'bootstrap.php';

if (isset($_POST["idprodotto"]) and isset($_POST["nome"]) and isset($_POST["descrizione"]) and isset($_POST["categoria"]) and isset($_POST["prezzo"])) {
    $dbh->updateProdotto($_POST["nome"], $_POST["descrizione"], $_POST["categoria"], $_POST["prezzo"], $_POST["idprodotto"]);
    if (isset($_FILES["immagine"])) {
      $dbh->uploadImmagine($_POST["idprodotto"], "prodotto");
      $_FILES["immagine"]== NULL;
    }
  }

$templateParams["titolo"] = "ReBurger";
$templateParams["nome"] = "mostra-prodotti.php";
$templateParams["prod"] = $dbh->getAllProdotti();

require_once 'template/base.php';
?>
