<?php
function createCopyright(){
    $year = date('Y');
    $msg = '&copy; ' . $year;
    return $msg;
}
?>