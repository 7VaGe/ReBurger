<?php
require_once 'bootstrap.php';
function createCopyright(){
    $year = date('Y');
    $msg = '&copy; ' . $year;
    return $msg;
}

function registerLoggedUser($user){
//creo una variabile di sessione per ogni campo del mio array associativo che ho come risultato
//dalla query nel dbhelper in checklogin.
$_SESSION["idutente"] = $user["idutente"];
$_SESSION["username"] = $user["username"];
}

function isUserLoggedIn(){
    return isset($_SESSION["idutente"]);
}

function logoutUser(){ //da controllare bene.
    $_SESSION["idutente"] = null;
    $_SESSION["username"] = null;
    $_SESSION["ordine"] = null;
    $_SESSION["venditore"] = null;
}
?>
