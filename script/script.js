 //se inserisco il document.ready( function (){ }) da un problema.
topBtn = document.getElementById("topBtn");


window.onscroll = function() {scroll()};
/**
 * Mostro il topBtn quando scendo di 20px dal top del docuemento.
 */
function scroll() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    topBtn.style.display = "block";
  
    
  } else {
    topBtn.style.display = "none";

  }
}
/**
 * Quando eseguo il click sul topBtn mi riporta in alto, e varia a seconda di Safari o di  Google Chrome/InternetExplorer.
 * il document.body.scrollTop è per safari, il secondo invece è per GC,IE e FFX.
 */
function goTop() {
  document.body.scrollTop = 0;  
  document.documentElement.scrollTop = 0;
}


