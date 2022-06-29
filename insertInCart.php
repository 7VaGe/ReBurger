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
    $costo = $dbh->getPrezzoProdotto($var);
    $dbh->setPrezzo($costo["prezzo"], $_SESSION["ordine"]);
    echo $_GET["p"] ." è stato aggiunto al carrello";

  }else {
    $dbh->updateCarrello($var, $_SESSION["ordine"]);
    $costo = $dbh->getPrezzoProdotto($var);
    $dbh->setPrezzo($costo["prezzo"], $_SESSION["ordine"]);
    echo $_GET["p"] ." è stato aggiunto al carrello";
  }
}

if (isset($_GET["a"])) {
  $var=$_GET["a"];
  $dbh->updateCarrello($var, $_SESSION["ordine"]);
  $costo = $dbh->getPrezzoProdotto($var);
  $dbh->setPrezzo($costo["prezzo"], $_SESSION["ordine"]);
  $spesa = $dbh->getPrezzoOrdine($_SESSION["ordine"]);
  echo "Prezzo totale: € ",$spesa["prezzo"];
}

if (isset($_GET["s"])) {
  $var=$_GET["s"];
  $dbh->decreaseCarrello($var, $_SESSION["ordine"]);
  $dbh->deleteCarrello();
  $costo = $dbh->getPrezzoProdotto($var);
  $dbh->setPrezzo("-".$costo["prezzo"], $_SESSION["ordine"]);
  $spesa = $dbh->getPrezzoOrdine($_SESSION["ordine"]);
  echo "Prezzo totale: € ",$spesa["prezzo"];
}
?>
