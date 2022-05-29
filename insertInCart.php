<?php
require_once 'bootstrap.php';
if (!isset($_SESSION["ordine"])) {
  $_SESSION["ordine"] = $dbh->insertOrdine($_SESSION["idutente"]);
}
if (isset($_GET["p"])) {
  $dbh->updateCarrello($_GET["p"], $_SESSION["ordine"]);
  echo "La funzione è stata eseguita";
} ?>
