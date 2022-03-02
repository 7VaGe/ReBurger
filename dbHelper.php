<?php
class DatabaseHelper{
    private $db;

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
        var_dump($stmt->error);
        return true;
    }

    public function insertUtente($username, $password, $email, $telefono, $img, $pagamento){
        $query = "INSERT INTO prodotto (username, password, email, telefono, img, pagamento) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('ssssss',$username, $password, $email, $telefono, $img, $pagamento);
        $stmt->execute();

        return $stmt->insert_id;
    }

    public function insertProdotto($venditore, $nome, $descrizione, $categoria, $allergene, $prezzo, $img){
        $query = "INSERT INTO prodotto (venditore, nome, descrizione, categoria, allergene, prezzo, img) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('ssssss',$venditore, $nome, $descrizione, $categoria, $allergene, $prezzo, $img);
        $stmt->execute();

        return $stmt->insert_id;
    }

    public function getProdottoByCategoria($categoria){
        $query = "SELECT idprodotto, nome, descrizione, allergene, prezzo, img FROM prodotto WHERE categoria=?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i',$categoria);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

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

}
?>
