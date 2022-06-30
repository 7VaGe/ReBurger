<div class="container-fluid mt-2 w-75 p-2">
      <div class="row row-cols-1 d-flex justify-content-center"> <!-- ho tolto row-cols-lg-3 che mi dava la forma a quadretto per la card.<img class="img img-fluid" src="img/ echo $info["img"]?>" style="height:100%; width:100%;"></img>-->
        <div class="card card-cover text-white bg-dark rounded-5 shadow-lg text-center">
              <div class="container text-center p-1 ">
                <form action="listaProdotti.php" method="post" enctype="multipart/form-data">
                  <h1 class=" my-4 display-5 mb-3 text-center text-white fw-normal">Modifica i campi del prodotto:</h1>
                  <div class="container-lg p-1">
                    <div class="form-floating d-flex">
                        <input type="text" class="form-control my-2" id="idprodotto" value="<?php echo $templateParams["prodotto"]["idprodotto"] ?>" name="idprodotto" hidden />
                    </div>
                    <div class="form-floating d-flex">
                        <input type="text" class="form-control my-2" id="nome" value="<?php echo $templateParams["prodotto"]["nome"] ?>" name="nome" /> <!-- oninvalid="this.setCustomValidity('cambia messaggio')" puoi cambiare il messaggio d'errore-->
                        <label class="text-dark" for="floatingInput">Nome</label>
                    </div>
                    <div class="form-floating d-flex">
                        <input type="text" class="form-control my-2" id="descrizione" value="<?php echo $templateParams["prodotto"]["descrizione"] ?>" name="descrizione" /> 
                        <label class="text-dark" for="floatingInput">Ingredienti</label>
                    </div>
                    <div class="form-floating d-flex">
                        <input type="number" class="form-control my-2" id="categoria" value="<?php echo $templateParams["prodotto"]["categoria"] ?>" name="categoria" /> 
                        <label class="text-dark" for="floatingInput">Categoria</label>
                    </div>
                    <div class="form-floating d-flex">
                        <input type="number" class="form-control my-2" id="prezzo" value="<?php echo $templateParams["prodotto"]["prezzo"] ?>" name="prezzo" /> 
                        <label class="text-dark" for="floatingInput">Prezzo</label>
                    </div>

                    <div class="form-floating d-flex">
                        <input type="file" class="form-control my-2" id="immagine" name="immagine" />
                        <label class="text-dark" for="floatingInput">Immagine</label>
                    </div>
                  <button class=" my-1 btn  btn-warning" type="submit">Modifica <i class="fa-solid fa-pen-to-square"></i></button>
                  </div>
                </form>
                <button class="my-1 btn btn-md btn-danger" value="<?php echo $templateParams["prodotto"]["idprodotto"]?>" onclick="eliminaProdotto(this.value);">Rimuovi <i class="fa-solid fa-trash-can"></i></button>
                </div>  
              </div>  
            </div>  
          </div>



<script>
function eliminaProdotto(val) {
  if (confirm("Sei sicuro di voler rimuove questo prodotto dal tuo menù ?") == true) {
    window.location="listaProdotti.php?elimina=1&prodotto="+val;
  }else {

  }
}
</script>
