<?php
session_start();
require_once("dbHelper.php");
$db = new DatabaseHelper("localhost", "root", "", "reburger", 3306);
define("IMG_DIR","./img/");
//aggiungere altre pagine di funzioni php o per database
?>
