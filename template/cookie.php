<?php
/*imposto un counter per le visite al mio sito, lo visualizzero in fondo alla pagina.
 require_once "bootstrap.php"
function nAccessi($elem){
    $nCookie = "Numero_accessi";
   if(!isset($_COOKIE[$nCookie])){
      echo "cookie" . $nCookie . "non settato! Inserimento in corso..";
      $vCookie = 1;
      setcookie($nCookie, $vCookie, time() + (60*60*24*30), "/");

   }else {
      echo "Cookie '" . $nCookie . "'settato!<br>";
      $nVisite = $_COOKIE[$nCookie] +1;
      setcookie($nCookie, $nVisite, time()+ (60*60*24*30), "/");
      echo "il sito è stato visitato da ". $utente . " "  . $nVisite ."volte!";
   }
//per rimuovere questo cookie basta semplicemente richiamare il cookie e impostare un tempo di validità
//passato con  setcookie ($nCookie, "" , time () - 100 , "/"); è sufficiente
 
}
  
 //creazione di cookie personalizzati per ogni cliente.
 

 /**
  * richiamo il db, prendo il nome dell'utente loggato in quel momento,
  * se non è settato nessun cookie valido a suo nome, lo creo, in caso 
  * contrario controllo la validità. 

 $templateParams["currentUser"] = $dbh->getUtenteById($_SESSION["idutente"]);
 $cookieP = "Cookie peronale";
 if(!isset($_COOKIE[$cookieP])){
   echo "cookie" . $cookieP . "non settato! Inserimento in corso..";
   foreach $templateParams["currenUser"]{
      $cookiePersonale = $templateParams["currenUser"]["username"];
      setcookie($cookieP, $cookiePersonale, time() + (60*60*24*30), "/"); 
   }
   
   
 }else {
   echo "Cookie '" . $cookiePersonale . "'settato!<br>";
   echo nAccessi($cookiePersonale);
 }
 
 
  */
 ?>
 
 
 <div id="cb-cookie-banner" class=" alert alert-warning fade show  text-center mb-0" role="alert" >
          🍪  Questo sito web utilizza i cookie per assicurarti di ottenere la migliore esperienza sul nostro sito web. <br>
          <a href="https://www.garanteprivacy.it/faq/cookie" target="blank">Ulteriori informazioni</a>
          <button type="button" class="btn btn-primary btn-sm ms-3" onclick="window.cb_hideCookieBanner()"> Accetto! </button>
         <div class=" d-flex justify-content-start">
            <button type="button" class="btn-close" data-bs-dismiss="alert"  aria-label="Close"></button>
         </div>
</div>

