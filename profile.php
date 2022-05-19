<?php

require_once 'bootstrap.php';
define($utente, 'utente');

if (isset($_POST["username"]) and isset($_POST["email"]) and isset($_POST["password"]) and isset($_POST["img"])){
  $dbh->updateUtente($_POST["username"], $_POST["email"], $_POST["password"],$_POST["img"], $_POST["idutente"]);
  $dbh->uploadImageProdotto($_POST["idutente"], $utente);
  $_SESSION["username"] = $_POST["username"]; 
  }

  
$templateParams["titolo"] = "ReBurger - Modifica profilo";
$templateParams["nome"] = "upload.php";
$templateParams["ordine"] = $dbh->getOrdiniByCliente($_SESSION["idutente"]);
$templateParams["referral"] = $dbh->getReferal($_SESSION["idutente"]);
$templateParams["utente"] = $dbh->getUtenteById($_SESSION["idutente"]);

require_once 'template/base.php';
?>
