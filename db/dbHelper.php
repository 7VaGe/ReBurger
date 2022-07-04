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
//Funzioni per tabella utente
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

    public function updateUtente($nome, $email, $password, $id){
        $query = "UPDATE utente SET username=?, email=?, password=? WHERE idutente=?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('sssi',$nome, $email, $password, $id);
        $stmt->execute();
      return true;
    }

    public function checkNomeUtente($username){
        $query = "SELECT idutente FROM utente WHERE username = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('s',$username);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function checkEmailUtente($mail){
        $query = "SELECT idutente FROM utente WHERE email = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('s',$mail);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function checkTelUtente($tel){
        $query = "SELECT idutente FROM utente WHERE telefono = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('s',$tel);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getEmail($id){
        $stmt = $this->db->prepare("SELECT email FROM utente WHERE idutente=?");
        $stmt->bind_param('s', $id);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result;
    }

    public function getUtenteById($idcliente){
        $query = "SELECT * FROM utente WHERE idutente=?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i',$idcliente);
        $stmt->execute();
        $result = $stmt->get_result();

      return $result->fetch_assoc();
  }

    public function getUtenti(){
        $query = "SELECT * FROM utente ";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();

      return $result->fetch_all(MYSQLI_ASSOC);
    }

//funzione di controllo login
    public function checkLogin($username, $password){
        $query = "SELECT idutente, username, email FROM utente WHERE username = ? AND password = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('ss',$username, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

//Funzioni per tabella prodotto

    public function insertProdotto($venditore, $nome, $descrizione, $categoria, $prezzo){
        $query = "INSERT INTO prodotto (venditore, nome, descrizione, categoria, prezzo) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('isssd',$venditore, $nome, $descrizione, $categoria, $prezzo);
        $stmt->execute();

        return $stmt->insert_id;
    }

    public function deleteProdotto($idprodotto){
        $query = "DELETE FROM prodotto WHERE idprodotto=?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i',$idprodotto);
        $stmt->execute();
        return true;
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
        $stmt->bind_param('s',$idcategory);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getProdottoById($idprodotto){
        $query = "SELECT * FROM prodotto WHERE idprodotto=?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i',$idprodotto);
        $stmt->execute();
        $result = $stmt->get_result();

      return $result->fetch_assoc();
    }

    public function getPrezzoProdotto($prodotto){
        $query = "SELECT prezzo FROM prodotto WHERE nome=?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('s',$prodotto);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_assoc();
    }

    public function updateProdotto($nome, $descrizione, $categoria, $prezzo, $id){
        $query = "UPDATE prodotto SET nome=?, descrizione=?, categoria=?, prezzo=? WHERE idprodotto=?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('sssdi',$nome, $descrizione, $categoria, $prezzo, $id);
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

    public function checkNomeProdotto($nome){
        $query = "SELECT idprodotto FROM prodotto WHERE nome = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('s',$nome);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

//Funzione per inserimento immagine

    public function uploadImmagine($id, $provenienza, $nome){
        $director = "img/";
        $percorso = $director . basename($_FILES["immagine"]["name"]);
        $valida = 1;
        $estensione = strtolower(pathinfo($percorso,PATHINFO_EXTENSION));
        $img = basename($_FILES["immagine"]["name"]);

        if (file_exists($percorso)) {
          $img = $nome.".".$estensione;
          if ($img == $percorso){
            unlink($percorso);
          }
          $percorso = $director . $img;
        }

        if($estensione != "jpg" && $estensione != "png" && $estensione != "jpeg") {
        $valida = 0;
        }

        if ($valida == 0) {

          return "Non siamo riusciti ad inserire l'immagine nel nostro database controlli se il file sia della giusta estensione oppure ne modifichi il nome";
        } else {
          if ($provenienza=="prodotto" && move_uploaded_file($_FILES["immagine"]["tmp_name"], $percorso)) {
            $identificatore = $id;
            $query = "UPDATE prodotto SET img=? WHERE idprodotto=?";
            $stmt = $this->db->prepare($query);
            $stmt->bind_param('si', $img, $identificatore);
            $stmt->execute();
            return true;
          }
          if ($provenienza=="utente" && move_uploaded_file($_FILES["immagine"]["tmp_name"], $percorso)) {
            $identificatore = $id;
            $query = "UPDATE utente SET img=? WHERE idutente=?";
            $stmt = $this->db->prepare($query);
            $stmt->bind_param('si', $img, $identificatore);
            $stmt->execute();
            return true;
          }
          if ($provenienza=="notizie" && move_uploaded_file($_FILES["immagine"]["tmp_name"], $percorso)) {
            $identificatore = $id;
            $query = "UPDATE notizie SET immagine=? WHERE idnews=?";
            $stmt = $this->db->prepare($query);
            $stmt->bind_param('si', $img, $identificatore);
            $stmt->execute();
            return true;
          }
        }
     }

//Funzioni su tabella carrello

    public function checkCarrello($nome, $ordine){
        $query = "SELECT idcarrello FROM carrello WHERE nome = ? AND idordine = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('si', $nome, $ordine);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function checkOldCarrello($ordine){
        $query = "SELECT * FROM carrello WHERE idordine = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i', $ordine);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function insertCarrello($nome, $ordine){
        $query = "INSERT INTO carrello (nome,idordine) VALUES (?,?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('si', $nome, $ordine);
        $stmt->execute();

        return true;
    }

    public function multyInsertCarrello($nome, $ordine, $quantita){
        $query = "INSERT INTO carrello (nome,idordine,quantita) VALUES (?,?,?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('sii', $nome, $ordine, $quantita);
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

    public function multyUpdateCarrello($quantita, $nome, $ordine){
        $query = "UPDATE carrello SET quantita = quantita+? WHERE nome = ? AND idordine = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('isi', $quantita, $nome, $ordine);
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

    public function deleteCarrello(){
        $query = "DELETE FROM carrello WHERE quantita=0";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return true;
    }

    public function emptyCarrello($ordine){
        $query = "DELETE FROM carrello WHERE idordine=?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i',$ordine);
        $stmt->execute();
        return true;
    }

//Funzioni sulla tabella ordine

    public function insertOrdine($cliente){
        $query = "INSERT INTO ordine (utente) VALUES (?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i',$cliente);
        $stmt->execute();

        return $stmt->insert_id;
    }

    public function setPrezzo($prezzo, $ordine){
        $query = "UPDATE ordine SET prezzo = ?+prezzo WHERE idordine=?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('di',$prezzo, $ordine);
        $stmt->execute();

        return true;
    }

    public function setPrezzoEmpty($ordine){
        $query = "UPDATE ordine SET prezzo = 0 WHERE idordine=?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i', $ordine);
        $stmt->execute();

        return true;
    }

    public function setUtenteInOrdine($utente, $ordine){
        $query = "UPDATE ordine SET utente=? WHERE idordine=?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('ii',$utente, $ordine);
        $stmt->execute();
        $result = $stmt->get_result();

        return true;
    }

    public function setOraOrdine($ora, $ordine){
        $query = "UPDATE ordine SET ora_consegna=? WHERE idordine=?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('si',$ora, $ordine);
        $stmt->execute();
        $result = $stmt->get_result();

        return true;
    }

    public function setPagamentoOrdine($pagamento, $ordine){
        $query = "UPDATE ordine SET pagamento=? WHERE idordine=?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('ii', $pagamento, $ordine);
        $stmt->execute();

        return true;
    }

    public function updateStatoOrdine($stato, $idordine){
        $query = "UPDATE ordine SET stato=? WHERE idordine=?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('ii', $stato, $idordine);
        $stmt->execute();
        return true;
    }

    public function updateOrdine($ora, $stato, $idordine){
        $query = "UPDATE ordine SET ora_consegna=? , stato=? WHERE idordine=?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('sii', $ora, $stato, $idordine);
        $stmt->execute();
        return true;
    }

    public function getStatoOrdine($idordine){
        $query = "SELECT stato FROM ordine WHERE idordine=?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i', $idordine);
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

    public function getClienteByOrdine($idordine){
        $query = "SELECT utente FROM ordine WHERE idordine=?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i',$idordine);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_assoc();
    }

    public function getOrdiniByCliente($idcliente){
        $stmt = $this->db->prepare("SELECT * FROM ordine WHERE utente=? ORDER BY idordine DESC");
        $stmt->bind_param('i',$idcliente);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getOrdini(){
        $stmt = $this->db->prepare("SELECT * FROM ordine ORDER BY idordine DESC");
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

//Funzioni tabella venditore

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

    public function updateContatti($indirizzo, $descrizione, $desc1, $desc2, $desc3, $nome){
        $query = "UPDATE venditore SET indirizzo=?, descrizione=?,descrizione1=?,descrizione2=?,descrizione3=?, nome=?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('ssssss',$indirizzo, $descrizione, $desc1, $desc2, $desc3, $nome);
        $stmt->execute();
        return true;
    }

//Funzione di controllo validita carta

    public function checkCarta($titolare, $numero, $cvc){
        $query = "SELECT idcarta FROM carte WHERE titolare = ? AND numero = ? AND cvc = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('sss',$titolare, $numero, $cvc);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

//Funzioni su tabella categoria

    public function insertCategoria($nome){
        $query = "INSERT INTO categoria (nomecategoria) VALUES (?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('s', $nome);
        $stmt->execute();

        return true;
    }

    public function getCategories(){
        $stmt = $this->db->prepare("SELECT * FROM categoria");
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function deleteCategoria($nomecategoria){
        $query = "DELETE FROM categoria WHERE nomecategoria=?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('s',$nomecategoria);
        $stmt->execute();
        return true;
    }

    public function checkNomeCategoria($nome){
        $query = "SELECT idcategoria FROM categoria WHERE nomecategoria = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('s',$nome);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

//Funzioni su tabella notizie

    public function insertNews($titolo, $desc){
        $query = "INSERT INTO notizie (titolo, contenuto) VALUES (?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('ss',$titolo, $desc);
        $stmt->execute();
        return $stmt->insert_id;
    }

    public function getNews(){
        $stmt = $this->db->prepare("SELECT * FROM notizie ORDER BY idnews DESC");
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function deleteNews($idnews){
        $query = "DELETE FROM notizie WHERE idnews=?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i',$idnews);
        $stmt->execute();
        return true;
    }

//Funzioni sulla tabella newsLetter

    public function insertNewsLetter($mail){
        $query = "INSERT INTO newsLetter(emailletter) VALUES (?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('s',$mail);
        $stmt->execute();

        return true;
    }

    public function getNewsLetter(){
        $query = "SELECT * FROM newsLetter";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function checkNewsLetter($mail){
        $query = "SELECT idletter FROM newsletter WHERE emailletter = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('s',$mail);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_assoc();
    }

}

?>
