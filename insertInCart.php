<?php
require_once 'bootstrap.php';
if (!isset($_SESSION["ordine"])) {
  $_SESSION["ordine"] = $dbh->insertOrdine($_SESSION["idutente"]);
}
if (isset($_GET["p"])) {
  $var=$_GET["p"];
  $params = $dbh->checkCarrello($var, $_SESSION["ordine"]);
  if ($params == NULL) {
    $dbh->insertCarrello($var, $_SESSION["ordine"]);
    echo $_GET["p"] ." è stato aggiunto al carrello";
  }else {
    $dbh->updateCarrello($var, $_SESSION["ordine"]);
    echo $_GET["p"] . " non è stato aggiunto al carrello";
  }
} ?>
