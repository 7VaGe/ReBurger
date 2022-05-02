<?php if (isset($_GET['logout'])) {
        if($_GET['logout']==1){
          logoutUser();
          $_GET['logout']=NULL;
        }
      }?>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="col-12 container-fluid justify-content-sm-center">
    <img class="col justify-content-lg-start overflow-hidden" src="img/Logo2.png" alt="ReBurger Logo" onclick='window.location="index.php"'/>
    <button class="col navbar-toggler ms-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <?php if($_SESSION["username"]=="propriolui"){ ?>
      <div class="container-mb col-5 collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="col-12 navbar-nav text-center" style="font-size:3vw;">
          <li class="nav-item col-sm-3 ">
            <a class="nav-link" href="nuovoProdotto.php">Prodotti</a>
          </li>
          <li class="nav-item col-sm-3">
            <a class="nav-link" href="contatti.php">About</a>
          </li>
          <li class="nav-item col-sm-3">
            <a class="nav-link" href="contatti.php">Ordini</a>
          </li>
          <li class="nav-item col-sm-3">
            <a class="nav-link" href="login.php"><?php echo $_SESSION["username"] ?></a>
          </li>
        </ul>
        </div>
        <div class="container text-lg-center text-sm-end col  d-none d-md-block">
              <button type="button" class="btn btn-outline-light" onclick='window.location="index.php?logout=1"'>LOGOUT</button>
            </div>
      </div>
      <?php } ?>
    <?php if (isset($_SESSION["username"])) { ?>
      <div class="container-mb col-5 collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="col-12 navbar-nav text-center" style="font-size:3vw;">
          <li class="nav-item col-sm-3 ">
            <a class="nav-link" href="menu.php">Prodotti</a>
          </li>
          <li class="nav-item col-sm-3">
            <a class="nav-link" href="carrello.php">Carrello</a>
          </li>
          <li class="nav-item col-sm-3">
            <a class="nav-link" href="contatti.php">About</a>
          </li>
          <li class="nav-item col-sm-3">
            <a class="nav-link" href="login.php"><?php echo $_SESSION["username"] ?></a>
          </li>
        </ul>
        </div>
        <div class="container text-lg-center text-sm-end col  d-none d-md-block">
              <button type="button" class="btn btn-outline-light" onclick='window.location="index.php?logout=1"'>LOGOUT</button>
            </div>
      </div>
  <?php    }else { ?>
    <div class="container-mb col-5 collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="col-12 navbar-nav text-center" style="font-size:3vw;">
        <li class="nav-item col-sm-3 ">
          <a class="nav-link" href="menu.php">Prodotti</a>
        </li>
        <li class="nav-item col-sm-3">
          <a class="nav-link" href="carrello.php">Carrello</a>
        </li>
        <li class="nav-item col-sm-3">
          <a class="nav-link" href="contatti.php">About</a>
        </li>
      </ul>
    </div>
    <div class="container text-lg-center text-sm-end col  d-none d-md-block">
          <button type="button" class="btn btn-outline-light" onclick='window.location="login.php"'>Login</button>
          <button type="button" class="btn btn-warning my-2" onclick='window.location="signup.php"'>Sign-up</button>
    </div>
  </div>
<?php     } ?>
  </nav>
