
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
$error ='';
$upload_path ='img/';
$moved = false;
$maxsize 5242880;
$types_allowed = ['image/jpeg', 'image/png', 'image/gif'];
$exts_allowed = ['jpg', 'jpeg', 'png', 'gif'];

function newFilename($filename,$upload_path){
    $basename  = pathinfo($filename, PATHINFO_FILENAME); 
    $exst = pathinfo($filename, PATHINFO_EXTENSION);
    $basename = preg_replace('/[^A-z0-9]/', '-', $basename); //sostituisco i caratteri nel nome del file base da caricare che non sono tra queli ammessi con un trattino.
    $i = 0;
    while( file_exists($upload_path . $filename)){
        $i = $i++;
        $filename =$basename . $i . '.' . $exst;  // ricostruisco il nome del file, aggiungendo un contatore numerico, nel caso vengano caricare due immagini con lo stesso nome. 


    }
     return $filename;
}

if($_SERVER['REQUEST_METHOD']=='POST'){
    $error = ($_FILES['image']['error']===1) ? 'Immagine troppo grande' : '' ;



    if($_FILES['image']['error']==0){ //se non ci sono errori.
        $error .=($_FILES['image']['size'] <= $maxsize) ? '' :  'Immagine troppo grande!';
       //controllo che il tipo sia nell'array $allowed_types.
       $type = mime_content_type($_FILES['image']['temp_name']); //determina il tipo del contenuto di un file.
       $error .= in_array($type, $allowed_types) ? '' : 'Tipo di file errato, cambiare file!';
       $exten =  strtolower(pathinfo($_FILES['image']['tmp_name'], PATHINFO_EXTENSION));
       $error .= in_array($exten, $exts_allowed) ? '': 'Estensione file errata!';
       
       if(!$error){ 
        /***
         * se non ci sono errori crea il nuovo percorso e tenta di spostare il file nel percordo di destinazione
         * */ 
        $filename = newFilename($_FILES['image']['name'], $upload_path); 
        $destination = $upload_path . $filename;
        $moved = move_uploaded_file ($_FILES['image']['tmp_name'], $destination);
       }
    } 
    
    if($moved === true){ //mostro l'immagine dalla cartella destinazione.
        $message = 'Immagine:<br><img src= "'. $destination .'">' ;

    }else { //mostro gli errori se non carico il file.
        $message = '<b>Il file' . $filename. 'potrebbe non essere stato caricato!cbr> Errore: ' . $error .' !</b>';
    }
        /*
        *     Quando un file viene inviato al server, riceve un nome di file temporaneo e viene collocato in una cartella temporanea,
        *     L'interprete php cancellerà il file temporaneo al termine dell'esecuzione dello script, pertanto si utilizza la funzione move_uploaded_file() 
        *     per spostarlo in un altra cartella.

        devono essere sostituiti tutti quei caratteri presenti in un file che potrebbero causare dei problemi, tra questi abbiamo:
        spazi, &, : , sostituiamo quindi tutti i caratteri diversi da A-Z, a-z, 0-9 con un trattino.
        
        $temp = $_FILES['image']['temp_name'];
        $path = 'img/'. $_FILES['image']['name'];
       
        //sposto il file e salvo il risultato in $moved
        $moved = move_uploaded_file($temp, $path); //temp indica la posizione temporanea, path invece la destinazione in cui lo si vuole mandare, nel nostro caso /img.
        

    } if($moved === true){ 
         $message = '<p> Immagine: </p>' . $path . '<p> caricata correttamente! </P>'; //inserisci qualche effetto o animazione qui.
        }
    }else{
        $message = 'Il file potrebbe non essere stato caricato!';
    }
 */

}
echo $message;

?>