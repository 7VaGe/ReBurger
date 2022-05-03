<?php

require_once 'bootstrap.php';

if(isset($_POST["username"]) && isset($_POST["password"])){
    //check del db con le funzioni in dbHelper.

  $login_result = $dbh->checkLogin($_POST["username"], $_POST["password"]);
  if(count($login_result)==0){
      //login fallito
      $templateParams["errorelogin"] = "Errore! Controllare Username o Password inseriti";
  }else{
      registerLoggedUser($login_result[0]);

  }
}

if(isUserLoggedIn()){
    //se è loggato vedo la pagina di profilo.
    $templateParams["titolo"] = "ReBurger - Profilo";
    $templateParams["nome"] = "profile-form.php";

}else {

$templateParams["titolo"] = "ReBurger - Home";
$templateParams["nome"] = "login-form.php";
}

require_once 'template/base.php';
?>