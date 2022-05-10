
<?php

/***
 * Quando un file viene inviato tramite una pagina web, viene salvato in una cartella temporanea sul server web, l'interprete PHP memorizza i dettagli del file nell'array superglobale $_FILES
 * name indica il nome del file.
 * tmp_name indica la posizione temporanea del file assegnatogli dall'interprete php.
 * size dimensioni in byte.
 * type indica il tipo di file, dipende dal browser.
 * error se vale 0 il file è stato inviato con successo, e crea un codice se invece vengono trovati degli errori durante.
 * 
 */

 /********************************* 
  *     VERIFICA FILE CARICATO    *
  *********************************/
$message ='';

if($_SERVER['REQUEST_METHOD']=='POST'){
    if($_FILES['image']['error']==0){
        $message = '<p> Immagine: </p>' . $_FILES['image']['name'] . '<p> caricata correttamente! </P>'; //inserisci qualche effetto o animazione qui.
    }else{
        $message = 'Il file potrebbe non essere stato caricato!';
    }
}

echo $message;

?>