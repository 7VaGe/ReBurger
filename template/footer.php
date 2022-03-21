<?php  
require_once 'utilityFunctions.php';

$colFooter = [1 => "Scopri il ristorante", 2 => "Di più sul nostro conto" ];
$footerLink = [ 
  ["Categorie","Chi siamo"],
  ["Prodotti","Contatti"],
  ["Carrello", "FAQs"]];
?>
<footer class="py-5 m-4 text-center text-white">
  <div class="row">
    <?php foreach($colFooter as $num => $titolo):?> <!-- Cicla i titoli-->
      <div class="col-6">     
            <h5><?= $titolo?></h5>
            <ul class="nav flex-column">
              <?php foreach ($footerLink as list($group1,$group2)) :?>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"> <?php if($num <2) { //da valutare il discorso dei link.
                  echo $group1;
                 }else {
                    echo $group2; 
                  }
                    ?></a></li>
                <?php endforeach ; ?>
             </ul> 
          </div>
        <?php endforeach ;?>
          <div class="col-12 py-4">
            <form class="justify-content-center">
              <h5>Iscriviti alla nostra newsletter</h5>
              <p>Riepilogo mensile delle nostre offerte e del panino del mese.</p>
              <div class="d-flex w-100 gap-2">
                <label for="newsletter1" class="visually-hidden">Indirizzo email</label>
                <input id="newsletter1" type="text" class="form-control" placeholder="Indirizzo Email ">
                <button class="btn btn-warning" type="button">Iscriviti</button>
              </div>
            </form>
          </div>
        <div class="col-12 d-block py-1 my-4 border-top">
          <!-- includendo il file dove ho le mie funzioni, riesco ad usarle. -->
          <p class="text-center text-muted"><?=createCopyright()?> Società, Inc. Tutti i diritti riservati.</p>
    </div>
        <div class="d-flex justify-content-center px-2 ">
          <ul class="list-unstyled d-flex text-white">
              <?php $social = [ "Meta" => '"bi bi-meta"', "Instagram" =>'"bi bi-instagram"', "Twitter" => '"bi bi-twitter"'];
              foreach($social as $nomeSocial => $icona): ?>
            <li class="ms-3"><a class="link-warning" href="#" id=<?=$nomeSocial?>><i class=<?=$icona?>></i></a></li>
            <?php endforeach; ?>
          </ul>
    </div>
  </footer>
