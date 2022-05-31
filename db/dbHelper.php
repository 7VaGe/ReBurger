<?php
class DatabaseHelper{
    private $db;
        /**
         * Dai di javadoc, slash doppio asterisco e invio, aggiungi la documentazione per ogni funzione così ci avvantaggimao senza doverla
         * fare tutta alla fine.
         */
    public function __construct($servername, $username, $password, $dbname, $port){
        $this->db = new mysqli($servername, $username, $password, $dbname, $port);
        if ($this->db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }
    }

    public function deleteUtente($idutente, $username){
        $query = "DELETE FROM utente WHERE idutente = ? AND username = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('is',$idarticolo, $username);
        $stmt->execute();
        return true;
    }

    public function insertUtente($name, $password, $email, $telefono){
        $query = "INSERT INTO utente (username, password, email, telefono) VALUES (?, ?, ?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('ssss',$name, $password, $email, $telefono);
        $stmt->execute();
        return $stmt->insert_id;
    }

    public function insertProdotto($venditore, $nome, $descrizione, $categoria, $prezzo){
        $query = "INSERT INTO prodotto (venditore, nome, descrizione, categoria, prezzo) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('issii',$venditore, $nome, $descrizione, $categoria, $prezzo);
        $stmt->execute();

        return $stmt->insert_id;
    }

    public function insertNews($titolo, $desc){
        $query = "INSERT INTO notizie (titolo, descrizione) VALUES (?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('ss',$titolo, $desc);
        $stmt->execute();
        return $stmt->insert_id;
    }

    public function getRandomProdotto($n){
        $stmt = $this->db->prepare("SELECT * FROM prodotto ORDER BY RAND() LIMIT ?");
        $stmt->bind_param('i',$n);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getProdotto(){
        $stmt = $this->db->prepare("SELECT * FROM prodotto");
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getProdottoByCategoria($idcategory){
        $query = "SELECT * FROM prodotto WHERE categoria=?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i',$idcategory);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

//  Useremo questa funzione per prendere le categorie da far visualizzare e i relativi prodotti, devo capire se
//  la query restituisce i risultati in un array oppure usa altre strutture, così posso capire dove accedere per prendere
//  i dati che ci servono.

    public function getProdottoById($idprodotto){
        $query = "SELECT * FROM prodotto WHERE idprodotto=?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i',$idprodotto);
        $stmt->execute();
        $result = $stmt->get_result();

      return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function updateUserImage($immagineUtente, $idutente){
        $query = "UPDATE utente SET img=? WHERE idutente=? ";
        $stmt = $this->db->prepare($query);
    	  $stmt->bind_param('si', $immagineUtente,$idutente);
        $stmt->execute();
    	return $stmt;
    }

    public function updateUtente($nome, $email, $password, $id){
        $query = "UPDATE utente SET username=?, email=?, password=? WHERE idutente=?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('sssi',$nome, $email, $password, $id);
        $stmt->execute();
      return true;
    }

    public function uploadImmagine($id, $provenienza){
      $director = "img/";
      $percorso = $director . basename($_FILES["immagine"]["name"]);
      $valida = 1;
      $estensione = strtolower(pathinfo($percorso,PATHINFO_EXTENSION));

      if (file_exists($percorso)) {

        $valida = 0;
      }

      if($estensione != "jpg" && $estensione != "png" && $estensione != "jpeg") {
        $valida = 0;
      }

      if ($valida == 0) {

        return false;
      } else {
        if ($provenienza=="prodotto" && move_uploaded_file($_FILES["immagine"]["tmp_name"], $percorso)) {
          $img = basename($_FILES["immagine"]["name"]);
          $identificatore = $id;
          $query = "UPDATE prodotto SET img=? WHERE idprodotto=?";
          $stmt = $this->db->prepare($query);
          $stmt->bind_param('si', $img, $id);
          $stmt->execute();
          return true;
        }
        if ($provenienza=="utente" && move_uploaded_file($_FILES["immagine"]["tmp_name"], $percorso)) {
          $img = basename($_FILES["immagine"]["name"]);
          $identificatore = $id;
          $query = "UPDATE utente SET img=? WHERE idutente=?";
          $stmt = $this->db->prepare($query);
          $stmt->bind_param('si', $img, $identificatore);
          $stmt->execute();
          return true;
        }
        if ($provenienza=="notizie" && move_uploaded_file($_FILES["immagine"]["tmp_name"], $percorso)) {
          $img = basename($_FILES["immagine"]["name"]);
          $identificatore = $id;
          $query = "UPDATE notizie SET img=? WHERE idnews=?";
          $stmt = $this->db->prepare($query);
          $stmt->bind_param('si', $img, $id);
          $stmt->execute();
          return true;
        }
       }
     }

    public function checkLogin($username, $password){
        $query = "SELECT idutente, username FROM utente WHERE username = ? AND password = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('ss',$username, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function checkCarrello($nome, $ordine){
        $query = "SELECT idcarrello FROM carrello WHERE nome = ? AND idordine = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('si',$nome, $ordine);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function insertCarrello($nome, $ordine){
        $query = "INSERT INTO carrello (nome,idordine) VALUES (?,?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('si',$nome, $ordine);
        $stmt->execute();
        return true;
    }

    public function updateCarrello($nome, $ordine){
        $query = "UPDATE carrello SET quantita = quantita+1 WHERE nome = ? AND idordine = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('si', $nome, $ordine);
        $stmt->execute();
        return true;
    }

    public function decreaseCarrello($nome, $ordine){
        $query = "UPDATE carrello SET quantita = quantita-1 WHERE nome = ? AND idordine = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('si', $nome, $ordine);
        $stmt->execute();
        return true;
    }

    public function getCarrello($ordine){
        $query = "SELECT * FROM carrello WHERE idordine=?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i',$ordine);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function deleteCarrello($ordine){
        $query = "DELETE FROM carrello WHERE idordine=?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i',$ordine);
        $stmt->execute();
        return true;
    }

    public function insertOrdine($cliente){
        $query = "INSERT INTO ordine (utente) VALUES (?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i',$cliente);
        $stmt->execute();

        return $stmt->insert_id;
    }

    public function updateStatoOrdine($idordine){
        $query = "UPDATE ordine SET stato=stato+1 WHERE idordine=?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i',$idordine);
        $stmt->execute();
        return true;
    }

    public function getCategories(){
        $stmt = $this->db->prepare("SELECT * FROM categoria");
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getNews(){
        $stmt = $this->db->prepare("SELECT * FROM notizie");
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getReferal($invitante){
        $stmt = $this->db->prepare("SELECT * FROM referral WHERE idinvitante=?");
        $stmt->bind_param('i',$invitante);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getPrezzoProdotto($prodotto){
        $query = "SELECT prezzo FROM prodotto WHERE nome=?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('s',$prodotto);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_assoc();
    }

    public function getPrezzoOrdine($ordine){
        $query = "SELECT prezzo FROM ordine WHERE idordine=?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i',$ordine);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_assoc();
    }

    public function getOrdiniByCliente($idcliente){
        $stmt = $this->db->prepare("SELECT * FROM ordine WHERE utente=?");
        $stmt->bind_param('i',$idcliente);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getOrdini(){
        $stmt = $this->db->prepare("SELECT * FROM ordine");
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function utenteIsVenditore($idutente){
        $query = "SELECT idvenditore FROM venditore WHERE utente=?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i',$idutente);
        $stmt->execute();
        $result = $stmt->get_result();

      return $result->fetch_assoc();
    }

    public function getInfoVenditore(){
        $query = "SELECT * FROM venditore";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();

      return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function updateContatti($indirizzo, $descrizione, $nome){
        $query = "UPDATE venditore SET indirizzo=?, descrizione=?, nome=?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('sss',$indirizzo, $descrizione, $nome);
        $stmt->execute();
        return true;
    }

    public function updateProdotto($nome, $descrizione, $categoria, $prezzo, $id){
        $query = "UPDATE prodotto SET nome=?, descrizione=?, categoria=?, prezzo=? WHERE idprodotto=?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('ssiii',$nome, $descrizione, $categoria, $prezzo, $id);
        $stmt->execute();
        return true;
    }

    public function getAllProdotti(){
        $query = "SELECT * FROM prodotto";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();

      return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getEmail($id){
        $stmt = $this->db->prepare("SELECT email FROM utente WHERE idutente=?");
        $stmt->execute();
        $stmt->bind_param('s', $id);
        $result = $stmt->get_result();

        return $result;
    }

    public function checkCarta($titolare, $numero, $cvc){
        $query = "SELECT idcarta FROM carte WHERE titolare = ? AND numero = ? AND cvc = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('sss',$titolare, $numero, $cvc);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function setPrezzo($prezzo, $ordine){
        $query = "UPDATE ordine SET prezzo = ?+prezzo WHERE idordine=?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('ii',$prezzo, $ordine);
        $stmt->execute();
        $result = $stmt->get_result();

        return true;
    }

  /*  public function getOrdiniByDate($data){
        $stmt = $this->db->prepare("SELECT * FROM ordine WHERE data_ordine=?");
        $stmt->bind_param('i',$data);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getOrdiniByPrezzo($prezzo){
          $stmt = $this->db->prepare("SELECT * FROM ordine WHERE costo=?");
          $stmt->bind_param('i',$prezzo);
          $stmt->execute();
          $result = $stmt->get_result();

          return $result->fetch_all(MYSQLI_ASSOC);
      }
*/
    public function getUtenteById($idcliente){
        $query = "SELECT * FROM utente WHERE idutente=?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i',$idcliente);
        $stmt->execute();
        $result = $stmt->get_result();

      return $result->fetch_all(MYSQLI_ASSOC);
  }

/*
    public function referral($invitato, $invitante){
        $query = "SELECT email FROM utente WHERE matricola=?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('ss',$invitato, $invitante);
        $stmt->execute();
        $result = $stmt->get_result();
        $address = $result->fetch_all(MYSQLI_ASSOC);
        foreach ($address as $valore=0) {
          if($valore==0){
            mail($address, 'referral', 'Il referal è andato a buon fine usi il seguente codice per ricevere lo sconto : REFERAL');
          }else{mail($address, 'referral', 'La tua matricola è stata usata per una operazione di referal usa il codice per ricevere il tuo sconto : REFERAL');}
        }
        return true;
    }

    public function searchReferral($idinvitante){
        $query = "SELECT matinvitato FROM referral WHERE idinvitante=?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('is',$idinvitato, $matinvitante);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function searchClienteByMatricola($matricola){
        $query = "SELECT utente FROM cliente WHERE matricola=?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i',$idinvitato);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }

    public function insertReferral($idinvitato, $idinvitante, $matinvitato, $matinvitante){
        $query = "INSERT INTO referral (idinvitato, idinvitante, matinvitato, matinvitante) VALUES (?, ?, ?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('iiss',$idinvitato, $idinvitante, $matinvitato, $matinvitante);
        $stmt->execute();

        return $stmt->insert_id;
    }

    public function insertRider($utente, $venditore, $mezzo){
        $query = "INSERT INTO rider (utente, venditore, mezzo) VALUES (?, ?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('iis',$utente, $venditore, $mezzo);
        $stmt->execute();

        return $stmt->insert_id;
    }

    public function insertSpedizione($rider, $cliente, $ordine, $venditore, $stato){
        $query = "INSERT INTO spedizione (rider, cliente, ordine, venditore, stato) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('iiiii',$rider, $cliente, $ordine, $venditore, $stato);
        $stmt->execute();

        return $stmt->insert_id;
    }

    public function getSpedioneByRider($rider){
        $query = "SELECT * FROM spedizione WHERE rider=?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i',$rider);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }
    */
    +    public function ilVisualizzato($idmittente, $iddestinatario,$limit=30){
            $query ="UPDATE `messaggi` SET `data_lettura`=NOW() WHERE `id_mittente`=? AND `id_destinatario`=? AND `data_lettura` IS NULL";
            $stmt = $this->db->prepare($query);
            $stmt->bind_param('iii',$idmittente, $iddestinatario, $limit);
            $stmt->execute();
            $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
        }

        public function getAllMsg($idmittente, $iddestinatario,$limit=30){
          $query ="SELECT * FROM `messaggi`WHERE `id_mittente` IN (?,?) AND `id_destinatatio` IN (?,?) ORDER BY `data_invio` DESC LIMIT 0, $limit";
          $stmt = $this->db->prepare($query);
          $stmt->bind_param('iii',$idmittente, $iddestinatario, $limit);
          $stmt->execute();
          $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
        }

        public function sendMsg($idmittente, $iddestinatario, $msg){
            return $this->exec(
                "INSERT INTO `messaggi` (`id_mittente`, `id_destinatario`, `msg`) VALUES (?,?,?)",
                [$idmittente, $iddestinatario, $msg]
            );
        }

       public function getMsgNonLetti($idutente){
            $query ="SELECT `id_mittente`, COUNT(*) `nonLetti` FROM `messaggi` WHERE `id_destinatario`=? AND `data_lettura` IS NULL GROUP BY `id_mittente`";
            $stmt = $this->db->prepare($query);
            $stmt->bind_param('i',$idutente);
            $stmt->execute();
            $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
       }

       public function getUtenti(){
        $query = "SELECT * FROM utente ";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();

      return $result->fetch_all(MYSQLI_ASSOC);
       }
}

?>
