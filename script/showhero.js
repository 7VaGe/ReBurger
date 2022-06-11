
 $(document).ready(function(){
    $(window).on("load",function() {
        $(window).scroll(function() {
          var windowBottom = $(this).scrollTop() + $(this).innerHeight();
          $(".fade").each(function() {
            /* Controllo la posizione di ogni elemento interessato */
            var objectBottom = $(this).offset().top + ($(this).outerHeight()/4);
            
            /* Se l'elemento è contenuto tra i bordi della finestra, esegui il fade in */
            if (objectBottom < windowBottom) { //gli oggetti arrivano alla finestra scorrendo in basso
              if ($(this).css("opacity")==0) {$(this).fadeTo(500,1);}
            } else { //gli oggetti che escono dalla dfinestra scorrendo in alto
              if ($(this).css("opacity")==1) {$(this).fadeTo(500,0);}
            }
          });
        }).scroll(); 
      });
 });
