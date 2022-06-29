<?php
require_once 'utilityFunctions.php';
require_once 'bootstrap.php';

$colFooter = [1 => "Scopri il ristorante", 2 => "Di più sul nostro conto" ];
$footerLink = [
  ["Ristorante","Contatti"],
  ["Carrello", "FAQs"]];
$links=["menu.php","carrello.php","contatti.php","faqs.php"];
$i=0;


if(isset($_SESSION["idutente"])){
  $placeholder = $dbh->getEmail($_SESSION["idutente"]);

}else{
  $placeholder = "Inserisci indirizzo email";
}
?>
<footer class="py-5 m-4 text-center text-white">
  <div class="row">
    <?php foreach($colFooter as $num => $titolo):?> <!-- Cicla i titoli-->
      <div class="col-6">
        <h5><?php echo $titolo?></h5>
        <ul class="nav flex-column">
        <?php foreach ($footerLink as list($group1,$group2)) :?>
          <li class="nav-item mb-2"><a href="<?php echo $links[$i] ?>" class="nav-link p-0 text-muted">
            <?php if($num <2) {
              echo $group1;
            }else{
              echo $group2;
            }
            $i= $i+1;?></a></li>
        <?php endforeach ; ?>
      </ul>
    </div>
  <?php endforeach ;?>
  <div class="col-12 py-4">
    <form action="" id="form1" class="signupform" name="signupform">
      <h5>Iscriviti alla nostra newsletter</h5>
      <p>Riepilogo mensile delle nostre offerte e del panino del mese.</p>
      <div class="d-flex w-100 gap-2">
        <label for="newsletter1" class="visually-hidden">Indirizzo Email</label>
        <input id="newsletter1" type="text" class="form-control" placeholder="<?php var_dump($placeholder);echo $placeholder;?>">
        <button id="signupNL" class="btn btn-warning" type="submit">Iscriviti</button>
      </div>
    </form>
  </div>
  <div class="col-12 d-block py-1 my-4 border-top">
    <p class="text-center text-muted"><?php echo createCopyright()?> Società, Inc. Tutti i diritti riservati.</p>
  </div>
  <div class="d-flex justify-content-center px-2 ">
    <ul class="list-unstyled d-flex text-white">
      <?php $social = [ "Meta" => '"bi bi-meta"', "Instagram" =>'"bi bi-instagram"', "Twitter" => '"bi bi-twitter"'];
      foreach($social as $nomeSocial => $icona): ?>
      <li class="ms-3"><a class="link-warning" href="#" id=<?php echo $nomeSocial?>><i class=<?php echo $icona?>></i></a></li>
      <?php endforeach; ?>
    </ul>
  </div>
</div>
</footer>
