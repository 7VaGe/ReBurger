<div class="container-lg">


  <ol class="list-group">
  <?php foreach($templateParams["catego"] as $category):?>
    <li class="mt-3 bg-dark rounded-3 shadow-lg text-white list-group-item d-flex justify-content-center align-items-start">
      <div class="ms-2 me-auto" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample"
      aria-expanded="false" aria-controls="collapseWidthExample">
        <div class="fw-bold"><?php echo $category["nomecategoria"]?></div>
       <p><?php echo $category["nomecategoria"]?></p>
      </div>
      <span class="badge"><i class='mt-3 fas fa-hamburger fa-bounce' style='font-size:48px;color:rgb(247,193,68)'></i></span>
    </li>
  <?php endforeach; ?>
  </ol>
</div>

<!-- <div  id="card1">
  <div class="collapse collapse-horizontal" id="collapseWidthExample">
    <div class="card card-body" style="width: 300px;">
      This is some placeholder content for a horizontal collapse. It's hidden by default and shown when triggered.
    </div>
  </div>
</div> -->
<div class="col-12 col-sm-4 text-white px-4 py-5 collapse collapse-horizontal" id="collapseWidthExample" >
    <div class="row row-cols-1 align-items-center g-4 py-5"> <!-- ho tolto row-cols-lg-3 che mi dava la forma a quadretto per la card. -->
      <div class="col">
        <div class="card card-cover overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="width:250px">
          <div class="d-flex flex-column text-center pb-3 text-white">
            <h2 class="pt-5 mb-4 display-1 text-center lh-1 fw-bold"><i class="fas fa-hamburger" style='font-size:48px;color:rgb(247,193,68)'></i></h2>
            <div class="d-flex flex-column display-5 fw-bold text-white text-shadow-1" >
             <p>CATEGORIA</p>
            </div>
          <div class="text-white">
          <cite> Descrizione categoria </cite>
          <!--  Prendere il nome dell'utente venditore,
                visualizzarlo a video e inserici una breve didascalia-->
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
