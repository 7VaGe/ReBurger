<?php

if(isset($_GET["scelta"])){
  if($_GET["scelta"]=="accetto"){
    setcookie("username", "1", time() + 3600);
    $_SESSION["sceltaCookie"] = "accettato";
    echo "il cookie è settato";
  }elseif ($_GET["scelta"]=="rifiuto") {
    $_SESSION["sceltaCookie"] = "rifiutato";
    echo "il cookie non è settato";
  }

}?>
