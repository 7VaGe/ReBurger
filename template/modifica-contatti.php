<div class="container-fluid mt-2 w-75 p-2">
      <div class="row row-cols-1 d-flex justify-content-center"> <!-- ho tolto row-cols-lg-3 che mi dava la forma a quadretto per la card.<img class="img img-fluid" src="img/ echo $info["img"]?>" style="height:100%; width:100%;"></img>-->
        <div class="card card-cover text-white bg-dark rounded-5 shadow-lg text-center">
            <div class="container text-center p-1">
            <form action="contatti.php" method="get">
                <h1 class=" my-4 h3 mb-3 text-white fw-normal">Modifica i seguenti argomenti: </h1>
                <div class="container-lg">
                <?php foreach ($templateParams["info"] as $info):     ?>
                <div class="form-floating d-flex justify-content-center">
                    <input type="text" class="form-control my-2  " id="indirizzo" value="<?php echo $info["indirizzo"] ?>" name="indirizzo" required/> <!-- oninvalid="this.setCustomValidity('cambia messaggio')" puoi cambiare il messaggio d'errore-->
                    <label class="text-dark" for="floatingInput">Indirizzo</label>
                </div>
                <div class="form-floating d-flex justify-content-center">
                    <input type="text" class="form-control my-2  " id="descrizione" value="<?php echo $info["descrizione"] ?>" name="descrizione" required/>
                    <label class="text-dark" for="floatingInput">descrizione</label>
                </div>
                <div class="form-floating d-flex justify-content-center">
                    <input type="text" class="form-control my-2" id="descrizione1" value="<?php echo $info["descrizione1"] ?>" name="descrizione1" required/>
                    <label  class="text-dark" for="floatingInput">descrizione1</label>
                </div>
                <div class="form-floating d-flex justify-content-center">
                    <input type="text" class="form-control my-2" id="descrizione2" value="<?php echo $info["descrizione2"] ?>" name="descrizione2" required/>
                    <label  class="text-dark" for="floatingInput">descrizione2</label>
                </div>
                <div class="form-floating d-flex justify-content-center">
                    <input type="text" class="form-control my-2 " id="descrizione3" value="<?php echo $info["descrizione3"] ?>" name="descrizione3" required/>
                    <label class="text-dark" for="floatingInput">descrizione3</label>
                </div>
                <div class="form-floating d-flex justify-content-center">
                    <input type="text" class="form-control my-2" id="nome_locale4" value="<?php echo $info["nome"] ?>" name="nome_locale" required/>
                    <label class="text-dark" for="floatingInput">Nome</label>
                </div>
            <?php endforeach;?>
                <button class="btn btn-warning my-3 " type="submit">Modifica <i class="fa-solid fa-pen-to-square"></i></button>
                </div>
            </form>
            </div>
            </div>
        </div>
    </div>
