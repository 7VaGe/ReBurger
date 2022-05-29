<?php
require_once 'bootstrap.php';
if (!isset($_SESSION["ordine"])) {
  $_SESSION["ordine"] = $dbh->insertOrdine($_SESSION["idutente"]);
}
if (isset($_GET["p"])) {
  $var=$_GET["p"];
  $params = $dbh->checkCarrello($var, $_SESSION["ordine"]);
  if ($params == false) {
    $dbh->insertCarrello($var, $_SESSION["ordine"]);
    echo "La funzione è stata eseguita";
  }else {
    $dbh->updateCarrello($var, $_SESSION["ordine"]);
    echo "La funzione è stata eseguita";
  }
} ?>
