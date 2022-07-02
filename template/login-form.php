<div class="container-fluid mt-2 w-25 p-2" id="LoginContainer">
      <div class="row row-cols-1 d-flex justify-content-center"> <!-- ho tolto row-cols-lg-3 che mi dava la forma a quadretto per la card.<img class="img img-fluid" src="img/ echo $info["img"]?>" style="height:100%; width:100%;"></img>-->
        <div class="card card-cover text-white bg-dark rounded-5 shadow-lg text-center">
          <div class="text-center p-1 ">
            <form action="login.php" method="post">
              <h1 class="my-4 h3 mb-3 text-white fw-normal">Inserisci i tuoi dati per accedere</h1>
              <?php if(isset($templateParams["errorelogin"])):?>
                <p class="text-white"> <?php echo $templateParams["errorelogin"];?> </p>
                <?php endif; ?>
              <div class="form-floating d-flex justify-content-center">
                <input type="text" class="form-control" placeholder="nameExample" id="username" name="username" required="required"/>
                <label class="text-dark" for="username">Username</label>
              </div>
              <div class="form-floating d-flex justify-content-center">
                <input type="password" class="form-control" placeholder="Password" id="password" name="password" required="required"/>
                <label class="text-dark" for="password">Password</label>
              </div>
              <button class=" btn btn-warning my-3" type="submit" name="submit">Accedi</button>
            </form>
          </div>
        </div>
      </div>
    </div>
