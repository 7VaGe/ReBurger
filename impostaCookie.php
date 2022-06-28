<?php
if(isset($_GET["scelta"])){
  $_SESSION["sceltaCookie"]="scelto";
  if($_GET["scelta"]=="accetto"){
    $_SESSION["sceltaCookie"]="accettato";
    setcookie("username", "1", time() + 3600);
    echo "il cookie è settato";
  }else{
    $_SESSION["sceltaCookie"]="rifiutato";
    echo "il cookie non è settato";
  }
}

?>
