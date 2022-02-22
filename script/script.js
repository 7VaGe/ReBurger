
 $(document).ready( function () {

    function myFunction(x) {
    if (screenWidth[0].matches) { // If media query matches
      var cssLink = document.getElementById("css_link")[0];
      cssLink.setAttribute("href",cssFiles[1]); 
    } else if ((screenWidth[1].matches)){
    var cssLink = document.getElementById("css_link")[0];
      cssLink.setAttribute("href",cssFiles[2]); 
    } else if ((screenWidth[2].matches)) {
      var cssLink = document.getElementById("css_link")[0];
      cssLink.setAttribute("href",cssFiles[3]); 
    }else{ 
      //anche come default, ha senso uno switch con i vari case?
      var cssLink = document.getElementById("css_link")[0];
      cssLink.setAttribute("href",cssFiles[0]); 
    }
  }
        var x;
        const screenWidth = ['window.matchMedia("(min-width: 768px)")', 'window.matchMedia("(min-width: 993px)")','window.matchMedia("(min-width: 1200px)")'];
            var cssFiles = ["../css/styleSmartphone.css","../css/styleTablet.css", "../css/styleNotebook.css","../css/stylePc.css"];      
            for(i=0; i<= screenWidth.length; i++){
              x=screenWidth[i];
              x.addEventListener("change", () => {
              this.myFunction(x);
              }); 
          }
      console.log(x);
      console.log(window.matchMedia);

  });
    



    
    
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
    
