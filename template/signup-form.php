<?php
$nameErr = $emailErr = $imgError = $passErr = $telErr = "";
$controlloErr = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $nameErr = "Inserisci un Username";
    $controlloErr = 1;
  } else {
    $presente = $dbh->checkNomeUtente($_POST["username"]);
    if ($presente!= false) {
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
    if ($presente!= false){
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

  $numeri = preg_match('/[0-9]/',$_POST["password"]);
  if (empty($_POST["tel"])) {
    $telErr = "Immetti un numero di telefono";
    $controlloErr = 1;
  }else{
    if(!$numeri || strlen($_POST["tel"])<9 || strlen($_POST["tel"])>15){
        $telErr = "Immetti un numero di telefono da 13 cifre, sono ammessi solo valori numerici";
        $controlloErr = 1;
      }
  }
  if ($controlloErr == 0) {
    $indice = $dbh->insertUtente($_POST["username"], $_POST["password"], $_POST["email"], $_POST["tel"]);

     ?>
     <div class="container-lg mt-2" id="card">
      <div class="row row-cols-1 align-items-stretch g-4 ">
        <div class="card card-cover  text-white bg-dark rounded-5 shadow-lg">
          <div class="d-flex flex-column text-center pb-3  text-white">
          <img class="rounded-circle mx-auto d-block my-2 img-fluid" src='img/<?php if($_FILES["immagine"]["name"]==NULL){
            echo "user.jpg";
          }else{
            echo $_FILES["immagine"]["name"];
          }?>' style="width: 200px; height:200px;"/>
            <h2 class="pt-5 mb-4 display-4 text-center lh-1 overflow-hidden fw-bold"><?php echo $_POST["username"] ?></h2>
            <div class="text-white">
              <p class="lead">
            <cite>Hai effettuato la registrazione con successo</cite>
          </p>
          <div class="d-grid gap-2 d-md-flex justify-content-md-center ">
          <button type="button" class="btn btn-warning" onclick='window.location="login.php"'>Accedi per la prima volta</button>
          </div>
            </div>
          </div>
        </div>
      </div>
  </div>
<?php $_POST["username"]=NULL; $_POST["password"]=NULL; $_POST["email"]=NULL; $_POST["tel"]=NULL; $_FILES["immagine"]= NULL;
}
}
?>
<div class="container-fluid mt-2 w-25 p-2" id="SignUpContainer">
      <div class="row row-cols-1 d-flex justify-content-center"> <!-- ho tolto row-cols-lg-3 che mi dava la forma a quadretto per la card.<img class="img img-fluid" src="img/ echo $info["img"]?>" style="height:100%; width:100%;"></img>-->
        <div class="card card-cover text-white bg-dark rounded-5 shadow-lg text-center">
            <div class="text-center p-1 ">
              <form action="" method="post" enctype="multipart/form-data" id="formSignUp">
                <h1 class=" my-4 h3 mb-3 text-center text-white fw-normal">Registrati compilando i seguenti campi:</h1>
                <div class="container-lg">
                  <div class="form-floating ">
                      <input type="text" class="form-control my-2" id="username" name="username"  value="<?php if(isset($_POST["username"])){echo $_POST["username"];}?>"/> <!-- oninvalid="this.setCustomValidity('cambia messaggio')" puoi cambiare il messaggio d'errore-->
                      <label class="text-dark" for="floatingInput">Username</label>
                      <span class="error d-block text-start text-danger"><?php echo $nameErr;?></span>
                  </div>
                  <div class="form-floating ">
                      <input type="password" class="form-control my-2" id="password" name="password"  value="<?php if(isset($_POST["password"])){echo $_POST["password"];}?>"/>
                      <label class="text-dark" for="floatingInput">Password</label>
                      <span class="error d-block text-start text-danger" ><?php echo $passErr;?></span>
                  </div>
                  <div class="form-floating ">
                      <input type="email" class="form-control my-2" id="email" name="email" value="<?php if(isset($_POST["email"])){echo $_POST["email"];}?>"/>
                      <label class="text-dark" for="floatingInput">Email</label>
                      <span class="error d-block text-start text-danger"><?php echo $emailErr;?></span>
                  </div>
                  <div class="form-floating ">
                      <input type="tel" class="form-control my-2" id="tel" name="tel" minlenght="13" maxlenght="13"  value="<?php if(isset($_POST["tel"])){echo $_POST["tel"];}?>" />
                      <label class="text-dark" for="floatingInput">Telefono</label>
                      <span class="error d-block text-start text-danger"><?php echo $telErr;?></span>
                  </div>
                  <div class="form-floating">
                      <input type="file" class="form-control my-2" id="immagine" name="immagine" />
                      <label class="text-dark" for="floatingInput">Immagine</label>
                    </div>
                  <div class="container d-flex justify-content-center">
                    <div class="checkbox my-3">
                      <button id="toggle-password" type="button" class="btn-sm btn-warning d-none"><i id="eyeIcon"class="bi bi-eye-slash"></i>
                      </div>
                    </div>
                <button class="btn btn-warning" type="submit">Registrati</button>
                </div>
              </form>
              <div class="container-lg">
                <button class="my-2 btn btn-outline-primary" onclick='window.location="login.php"'>Hai già un account? Entra!</button>
              </div>
            </div>
          </div>
        </div>
      </div>
<script src="script/showpwd.js"></script>
