<?php

if(isset($_GET["scelta"])){
  if($_GET["scelta"]=="accetto"){
    setcookie("username", "1", time() + 3600);
    echo "il cookie è settato";
  }else{
    $GLOBALS["negato"] = "rifiutato";
    echo "il cookie non è settato";
  }

}?>
