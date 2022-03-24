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

    public function insertUtente($username, $password, $email, $telefono, $img){
        $query = "INSERT INTO utente (username, password, email, telefono, img) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('sssis',$username, $password, $email, $telefono, $img);
        $stmt->execute();
        return $stmt->insert_id;
    }

    public function insertCliente($matricola, $pagamento){
        $query = "INSERT INTO cliente (matricola, pagamento) VALUES (?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('is',$matricola, $pagamento);
        $stmt->execute();
        return $stmt->insert_id;
    }

    public function insertProdotto($venditore, $nome, $descrizione, $categoria, $allergene, $prezzo, $img){
        $query = "INSERT INTO prodotto (venditore, nome, descrizione, categoria, allergene, prezzo, img) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('sssiis',$venditore, $nome, $descrizione, $categoria, $allergene, $prezzo, $img);
        $stmt->execute();

        return $stmt->insert_id;
    }

    public function getRandomProdotto($n){
        $stmt = $this->db->prepare("SELECT idprodotto, nome, img FROM prodotto ORDER BY RAND() LIMIT ?");
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

    public function getProdottoByCategoria($idcategoria){
        $query = "SELECT nome, descrizione, allergene, prezzo, img FROM prodotto WHERE categoria=?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i',$idcategoria);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

//  Useremo questa funzione per prendere le categorie da far visualizzare e i relativi prodotti, devo capire se
//  la query restituisce i risultati in un array oppure usa altre strutture, così posso capire dove accedere per prendere
//  i dati che ci servono.

    public function getProdottoByVenditore($venditore){
        $query = "SELECT idprodotto, nome, descrizione, categoria, allergene, prezzo, img FROM prodotto WHERE venditore=?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i',$venditore);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function uploadImmaginiProdotto($idprodotto, $img){
    		$query = "INSERT INTO prodotto WHERE idprodotto=? VALUES (?)";
    		$stmt = $this->db->prepare($query);
    		$stmt->bind_param('is', $idprodotto, $img);
    		$stmt->execute();
    		return $stmt;

    		}

    public function checkLogin($username, $password){
        $query = "SELECT idutente, username FROM utente WHERE username = ? AND password = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('ss',$username, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function checkCarrello($nome){
        $query = "SELECT nome FROM carrello WHERE nome = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('s',$nome);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function insertProdottoCarrello($nome, $prezzo){
        if(checkCarrello($nome)){
          $query = "UPDATE carrello SET quantita+1 WHERE nome = ?";
        }else{
          $query = "INSERT INTO prodotto (nome, prezzo) VALUES (?, ?)";
        }
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('si',$nome, $prezzo);
        $stmt->execute();
        return true;
    }

    public function createCarrello(){
        $query = "CREATE TABLE IF NOT EXISTS `ReBurgher`.`utente`(`nome` VARCHAR(24) NOT NULL UNIQUE,`quantita` INT DEFAULT 1 ,`prezzo` INT NOT NULL, CONSTRAINT `fk_prodotto_carrello`, FOREIGN KEY (`prodotto`) REFERENCES `ReBurgher`.`prodotto` (`idprodotto`) ON DELETE NO ACTION ON UPDATE NO ACTION,  CONSTRAINT `fk_ordine_carrello` FOREIGN KEY (`ordine`) REFERENCES `ReBurgher`.`ordine` (`idordine`) ON DELETE NO ACTION ON UPDATE NO ACTION) ENGINE = InnoDB";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return true;
    }

    public function deleteCarrello($idprodotto, $img){
        $query = "TRUNCATE TABLE carrello";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return true;
    }

    public function insertOrdine($cliente, $data, $stato, $prezzo){
        $query = "INSERT INTO ordine (cliente, data, stato, pagamento) VALUES (?, ?, ?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('isii',$cliente, $data, $stato, $prezzo);
        $stmt->execute();

        return $stmt->insert_id;
    }

    public function updateStatoOrdine($idordine, $stato){
        $query = "UPDATE ordine SET stato+1 WHERE idordine=?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('ii',$idordine, $stato);
        $stmt->execute();
        return true;
    }

    public function getCategories(){
        $stmt = $this->db->prepare("SELECT * FROM categoria");
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

}

?>
