<?php

require_once 'bootstrap.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  if (!isset($_SESSION["ordine"])) {
    $_SESSION["ordine"] = $dbh->insertOrdine($_SESSION["idutente"]);
  }
  if(isset($_GET["ordine"])){
    $templateParams["riproposta"] = $dbh->checkOldCarrello($_GET["ordine"]);
    foreach ($templateParams["riproposta"] as $prod) {
      $params = $dbh->checkCarrello($prod["nome"], $_SESSION["ordine"]);
      if ($params == NULL) {
        $dbh->insertCarrello($prod["nome"], $_SESSION["ordine"]);
        $costo = $dbh->getPrezzoProdotto($prod["nome"]);
        $dbh->setPrezzo($costo["prezzo"], $_SESSION["ordine"]);
      }else {
        $dbh->updateCarrello($prod["nome"], $_SESSION["ordine"]);
        $costo = $dbh->getPrezzoProdotto($prod["nome"]);
        $dbh->setPrezzo($costo["prezzo"], $_SESSION["ordine"]);
      }
    }
  }
}

$templateParams["titolo"] = "ReBurger - Carrello";
$templateParams["nome"] = "carrello-form.php";
$templateParams["carrello"] = $dbh->getCarrello($_SESSION["ordine"]);
$templateParams["conto"] = $dbh->getPrezzoOrdine($_SESSION["ordine"]);

require_once 'template/base.php';

?>
