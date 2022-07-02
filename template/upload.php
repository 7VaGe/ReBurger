<?php
$nameErr = $emailErr = $imgError = $passErr = $telErr = "";
$controlloErr = 1;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $controlloErr = 0;
  if (empty($_POST["username"])) {
    $nameErr = "Inserisci un Username";
    $controlloErr = 1;
  } else {
    $presente = $dbh->checkNomeUtente($_POST["username"]);
    if ($presente!= false && $templateParams["utente"]["username"] != $_POST["username"]) {
      $nameErr = "Questo nome utente è gia usato";
      $controlloErr = 1;
    }
  }

  $emailformat = preg_match('/[a-zA-Z0-9_\.]+@[a-zA-Z0-9-]+\.[a-zA-Z]{0,4}/', $_POST["email"]);
  if (empty($_POST["email"])){
    $emailErr = "Inserisci una email";
    $controlloErr = 1;
  }else{
     $presente = $dbh->checkEmailUtente($_POST["email"]);
    if ($presente!= false && $templateParams["utente"]["email"] != $_POST["email"]){
      $emailErr = "Questa email è gia usata";
      $controlloErr = 1;
    }else{
      if(!$emailformat){
      $emailErr = "inserisci un indirizzo email valido";
      $controlloErr = 1;
    }
  }
  }

  $saltPassword = preg_match('/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*\W)(?!.* ).{8,16}$/', $_POST["password"]);
  /*$upperCase = preg_match('/[A-Z]/',$_POST["password"]);
  $lowerCase = preg_match('/[a-z]/',$_POST["password"]);
  $carSpeciali = preg_match('/[^\w]/',$_POST["password"]);*/

  if (empty($_POST["password"])) {
    $passErr = "Immetti una password";
    $controlloErr = 1;
    }else{
      if(!$saltPassword){
       $passErr= "Inserisci almeno 8 caratteri, di cui:<br><ul type='circle'><li>Una lettera maiuscola</li><li>Un carattere speciale</li><li>Un numero</li></ul>";
       $controlloErr = 1;
    }
  }

  $numeri = preg_match('/[0-9]/',$_POST["tel"]);
  if (empty($_POST["tel"])) {
    $telErr = "Immetti un numero di telefono";
    $controlloErr = 1;
  }else{
    $presente = $dbh->checkTelUtente($_POST["tel"]);
    if ($presente!= false  && $templateParams["utente"]["telefono"] != $_POST["tel"]){
      $telErr = "Questp numero è gia usata";
      $controlloErr = 1;
    }else{
      if(!$numeri || strlen($_POST["tel"])<9 || strlen($_POST["tel"])>15){
        $telErr = "Immetti un numero di telefono da 13 cifre, sono ammessi solo valori numerici";
        $controlloErr = 1;
      }
    }
  }
  if ($controlloErr == 0) {
    if (isset($_POST["username"]) and isset($_POST["email"]) and isset($_POST["password"])){
      $dbh->updateUtente($_POST["username"], $_POST["email"], $_POST["password"], $_POST["idutente"]);
      if(isset($_FILES["immagine"])){
        $risposta=$dbh->uploadImmagine($_SESSION["idutente"], "utente");
        $_FILES["immagine"]=NULL;
      }
      $_SESSION["username"] = $_POST["username"];
      $_SESSION["mail"] = $_POST["email"];
    }?>

<div class="container-lg mt-2" id="card">
      <div class="row row-cols-1 align-items-stretch g-4 ">
        <div class="card card-cover  text-white bg-dark rounded-5 shadow-lg">
          <div class="d-flex flex-column text-center pb-3  text-white">
          <img class="rounded-circle mx-auto d-block my-2 img-fluid" src='img/<?php if ($_FILES["immagine"]==NULL) {
            echo $templateParams["utente"]["img"];
          }else{
            echo $_FILES["immagine"]["name"];
          } ?>' style="width:250px; height:250px;"/>
            <h2 class="pt-5 mb-4 display-4 text-center lh-1 overflow-hidden fw-bold"><?php echo $_POST["username"]?></h2>
            <div class="text-white">
              <p class="lead">
            <cite>Hai modificato il profilo con successo</cite>
          </p>
          <div class="d-grid gap-2 d-md-flex justify-content-md-center ">
            <button type="button" class="btn btn-warning" onclick='window.location="login.php"'>Torna al tuo profilo</button>
          </div>
            </div>
          </div>
        </div>
      </div>
  </div>




<?php $_POST["username"] = $_POST["email"] = $_POST["password"] = $_FILES["immagine"] = NULL;
}
}
?>
<div class="container-fluid mt-2 p-2" id="UploadContainer" <?php if ($controlloErr == 0){ echo "hidden";} ?>>
  <div class="row row-cols-1 d-flex justify-content-center"> <!-- ho tolto row-cols-lg-3 che mi dava la forma a quadretto per la card.<img class="img img-fluid" src="img/ echo $info["img"]?>" style="height:100%; width:100%;"></img>-->
    <div class="text-white bg-dark rounded-5 shadow-lg text-center">
      <div class="text-center p-1 ">
        <form action="" method="post" enctype="multipart/form-data">
          <div class="container-lg px-0">
            <h1 class="my-4 h3 mb-3 text-center text-white fw-normal">Benvenuto, ora puoi modificare il tuo profilo <?php echo strtolower($templateParams["utente"]["username"]); ?> : </h1>
            <div class="bg-dark rounded-6 shadow-lg" >
              <img class="rounded-circle mx-auto d-block my-2 img-fluid" src='img/<?php echo $templateParams["utente"]["img"]?>' style="width: 200px; height:200px;"/>
              <div class="container col-lg-6 col-lg-offset-2">
                <div class="form-floating">
                  <input type="number" class="form-control my-2" id="idutente" value="<?php echo $templateParams["utente"]["idutente"] ?>" name="idutente" hidden/> <!-- oninvalid="this.setCustomValidity('cambia messaggio')" puoi cambiare il messaggio d'errore-->
                </div>
                <div class="form-floating">
                  <input type="text" class="form-control my-2" id="username" value="<?php echo $templateParams["utente"]["username"] ?>" name="username" />
                  <label class="text-dark">Nome utente</label>
                  <span class="error d-block text-start text-danger"><?php echo $nameErr;?></span>
                </div>
                <div class="form-floating">
                  <input type="email" class="form-control my-2" id="email" value="<?php echo $templateParams["utente"]["email"] ?>" name="email" />
                  <label class="text-dark">Email</label>
                  <span class="error d-block text-start text-danger"><?php echo $emailErr;?></span>
                </div>
                <div class="form-floating">
                  <input type="tel" class="form-control my-2" id="tel" value="<?php echo $templateParams["utente"]["telefono"] ?>" name="tel" />
                  <label class="text-dark">Telefono</label>
                  <span class="error d-block text-start text-danger"><?php echo $telErr;?></span>
                </div>
                <div class="form-floating">
                  <input type="password" class="form-control my-2" id="password" value="<?php echo $templateParams["utente"]["password"] ?>" name="password" />
                  <label class="text-dark">Password</label>
                  <span class="error d-block text-start text-danger"><?php echo $passErr;?></span>
                </div>
                <div class="form-floating">
                  <input type="file" class="form-control my-2" id="immagine" value="" name="immagine" />
                  <label class="text-dark">Immagine utente</label>
                </div>
                <div class="checkbox m-3">
                  <button id="toggle-password" type="button" class="btn-sm btn-warning mx-4 d-none"><i id="eyeIcon"class="bi bi-eye-slash"></i>
                  </div>
                  <button class="btn btn-warning m-3" type="submit"> Conferma modifiche <br> <i class="fa-solid fa-circle-check"></i></button>
                </div>
              </div>
            </form>
          </div>
          <button class="btn btn-warning my-4"  onclick='window.location="login.php"'> <i class="fa-solid fa-circle-arrow-left"></i> Torna al tuo profilo</button>
        </div>
      </div>
    </div>
  </div>





<script src="script/showpwd.js"></script>
