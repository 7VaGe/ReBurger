


$(document).ready( function () {
   function screenOver768px(screenWidth){
     if(screenWidth.matches){ //se lo schermo è più grande 
        //cambi alcune proprietà del codice in base.html per prova cambio il bg-color
        document.body.style.backgroundColor= "red";
    }
}
    var _screenOver768px = window.matchMedia("(min-width: 768px)")
    var _screenOver993px = window.matchMedia("(min-width: 993px)")//fai qualcosa e crea la funzione adeguata
    var _screenOver1200px = window.matchMedia("(min-width: 1200px)")//fai qualcosa e crea la funzione adeguata

    screenOver768px(_screenOver768px)
    _screenOver768px.addEventListener(myfunction);
    })
