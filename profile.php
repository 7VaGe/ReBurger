<?php

require_once 'bootstrap.php';

if (isset($_POST["username"]) and isset($_POST["email"]) and isset($_POST["password"])){
  $dbh->updateUtente($_POST["username"], $_POST["email"], $_POST["password"], $_POST["idutente"]);
  if(isset($_FILES["immagine"])){
    $risposta=$dbh->uploadImmagine($_SESSION["idutente"], "utente");
    $_FILES["immagine"]=NULL;
  }
  $_SESSION["username"] = $_POST["username"];
}


$templateParams["titolo"] = "ReBurger - Modifica profilo";
$templateParams["nome"] = "upload.php";
$templateParams["ordine"] = $dbh->getOrdiniByCliente($_SESSION["idutente"]);
$templateParams["utente"] = $dbh->getUtenteById($_SESSION["idutente"]);

require_once 'template/base.php';
?>
