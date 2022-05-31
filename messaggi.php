<?php /***
 * è da completare devo capire il meccaniscmo, ora sviluppo la parte grafica poi penso al resto
 * 
 * 

require_once 'bootstrap.php';
  // Prendo gli utenti
  function getUsers(){
    $users = $dbh->getUtenteById($_SESSION["idutente"]);
    if (!is_array($users)) { 
        return false; 
    }
    //aggiungi dicitura ai messaggi non Letti.
    while ($r = $this->stmt->fetch()) {
      $users[$r["id_mittente"]]["non_Letti"] = $r["nonLetti"];
    }
    return $users;
  }
  function getMyMsg(){
      if(isset($_SESSION["idutente"])) return $idmittente = $_SESSION["idutente"];
  }
    $templateParams["titolo"] = "ReBurger - Casella Messaggi";
    $templateParams["nome"] = "messaggi-form.php";
    $templateParams["listaUtenti"] = $dbh->getUtenti();
    // $templateParams["messaggi"] = $dbh->getAllMsg($_SESSION["idutente"]);
    // $templateParams["#messaggiNonLetti"] =$dbh->getMsgNonLetti($_SESSION["idutente"])
    

    require_once 'template/base.php'; */
?>