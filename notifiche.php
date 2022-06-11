<?php
require_once 'bootstrap.php';

if(isset($_SESSION["ordine"])){
    $stato = $dbh->getStatoOrdine($_SESSION["ordine"]);
    
    echo "<span class='position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle'>
    <span class='visually-hidden'>".$stato ."</span>
     </span>" ;
}

//non funziona
?>
