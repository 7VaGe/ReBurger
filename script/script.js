
$(document).ready( function () {

    function myFunction(x) {
  if (x.matches) { // If media query matches
    document.body.style.backgroundColor = "yellow";
  } else {
   document.body.style.backgroundColor = "pink";
  }
}
        var x = window.matchMedia("(min-width: 768px)")
        myFunction(x) // Call listener function at run time
        x.addEventListenerstener(myFunction)// Attach listener function on state changes



    // const screenWidth = ["(min-width: 768px)", "(min-width: 993px)","(min-width: 1200px)"];
    // var cssFiles = ["../css/styleSmartphone.css", "../css/styleSmartphone.css","../css/styleTablet.css", "../css/styleNotebook.css","../css/stylePc.css"];
    
    // if(window.matchMedia(screenWidth[0]).matches){
    //     var cssLink = document.getElementById("css_link");
    //     cssLink.setAttribute("href",cssFiles[0]);
    // } else if(window.matchMedia(screenWidth[0]).matches){
    //     var cssLink = document.getElementById("css_link");
    //     cssLink.setAttribute("href",cssFiles[0]);
    // } else if(window.matchMedia(screenWidth[1]).matches){
    //     var cssLink = document.getElementById("css_link");
    //     cssLink.setAttribute("href",cssFiles[3])
    // } else if(window.matchMedia(screenWidth[3]).matches){
    //     var cssLink = document.getElementById("css_link");
    //     cssLink.setAttribute("href",cssFiles[3]);
    // }


   /*
    function getScreenWidth(){
      return screenWidth = document.getElementById("width");
    }
    TODO: controlla meglio il meccanismo per l'iindividuazione automatica del file css adatto
    occorre cambiare il css a seconda del matchmedia che viene triggerato, pensavo di inserirci un foreach o un for, ma 
    non è la strada migliore, quindi per snellire il codice pensavo di  richiamare una funzione generica con le operazione
    da effettuare ogni volta che viene matchato un css adeguato.

    Ricordati che il matchmedia sembrerebbe funzionare solo quando viene caricato il documento, quindi per funzionare nuovamente
    deve essere ricaricato, non so se è il document.ready che da questo blocco.


   screenOver768px(_screenOver768px);
    _screenOver768px.addEventListener(myfunction);
*/
    })
