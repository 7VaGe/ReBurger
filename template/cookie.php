<?php $_SESSION["sceltaCookie"]=""; ?>
<div id="cb-cookie-banner" class=" alert alert-warning fade show  text-center mb-0" role="alert" <?php if(isset($_COOKIE["username"])){echo "hidden";}
?> >
  🍪  Questo sito web utilizza i cookie per assicurarti di ottenere la migliore esperienza sul nostro sito web.<?php echo $_SESSION["sceltaCookie"] ?><br>
  <a href="https://www.garanteprivacy.it/faq/cookie" target="blank">Ulteriori informazioni</a> <br>
    <button class="btn btn-primary btn-sm ms-3" value="accetto" onclick="changeBannerState(this.value)"> Accetto </button>
    <button class="btn btn-primary btn-sm ms-3" value="rifiuto" onclick="changeBannerState(this.value)"> Non adesso </button>
</div>

<script>
function changeBannerState(val) {
  document.getElementById("cb-cookie-banner").style.display = "none";
  var http = new XMLHttpRequest();
  http.open("get", "impostaCookie.php?scelta="+val, true);
  http.send();
  http.onload = function() {
  }
}

</script>
