/**
 * Dato che alcuni browser IE non utilizzano lo stesso modo di gestione degli eventi  voglio creare una 
 * funzione di supporto cross-browser per aggiungere un gestore di eventi. 
 * @param {} el elemento o anche nodo del DOM al quale verrà aggiunto o tolto l'evento.
 * @param {*} event tipologia d'evento in ascolto.
 * @param {*} callback la funzione che deve essere eseguita quando lancio l'evento sull'elemento selezionato.
 */
function addEvent(el,event,callback){
    if('addEventListener' in el){  //controllo se l'elemento supporta il metodo addeventlistener.
        el.addEventListener(event, callback, false); //se lo supporta utilizzo il metodo addeventlistener.
    } else{ //in caso contrario aggiungo due metodi all'elemento el poi uso attachEvent di IE per richiamarli quando si verifica l'evento su quell'elemento.
        el['e'+event +callback] = callback; //METODO 1: Quando si verifica l'evento su el, eseguo callback.
        el[event + callback] = function () {  //METODO 2: 
            el['e' + event + callback](window.event); //richiamo il metodo per passare l'oggetto event alla funzione precedente.   
        };
        el.attachEvent('on' + event, el[event + callback]); // quando si verifica l'evento sull'elemento el tramite attachEvent richiamo i metodi aggiunti sopra.
    }
}

