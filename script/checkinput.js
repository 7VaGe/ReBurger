$(document).ready(function($){
    $.fn.inputFilter = function(callback, errMsg) {
        return this.on("input keydown keyup mousedown mouseup select contextmenu drop focusout", function(e) {
          if (callback(this.value)) {
            // Valori accettati
            if (["keydown","mousedown","focusout"].indexOf(e.type) >= 0){
              $(this).removeClass("input-error");
              this.setCustomValidity("");
            }
            this.oldValue = this.value;
            this.oldSelectionStart = this.selectionStart;
            this.oldSelectionEnd = this.selectionEnd;
          } else if (this.hasOwnProperty("oldValue")) {
            // Valori non accettati, riprende il valore vecchio
            $(this).addClass("input-error");
            this.setCustomValidity(errMsg);
            this.reportValidity();
            this.value = this.oldValue;
            this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
          } else {
            // Valori non accettati senza recuperare nessun valore vecchio
            this.value = "";
          }
        });
      };
    /**
     * Filtro generico per i valori interi, da utilizzarlo per le input type che necessitano un controllo.
     * @param {} element valore dell'elemento nel dom, tramite un ID o proprio il tag. return /^-?\d*$/.test(value); }, "");
     */
    function filterInteger(element){
            $(element).inputFilter(function(value){
            return /^\d*$/.test(value); }, "Dovresti inserire un intero.");
            };
        /**
     * Filtro generico per i valori interi contenuti tra 1 e 999, da utilizzarlo per le input type che necessitano un controllo.
     * @param {} element valore dell'elemento nel dom, tramite un ID o proprio il tag.
     */
    function filterIntegerBeetween(element){
        $(element).inputFilter(function(value){
        return /^\d*$/.test(value) && (value === "" || parseInt(value) <= 999); }, "Inserisci il codice segreto di 3 cifre riportato dietro la tua carta.");
        };
        /**
     * Filtro generico per i caratteri, da utilizzarlo per le input type che necessitano un controllo.
     * @param {} element valore dell'elemento nel dom, tramite un ID o proprio il tag.
     */
    function filterOnlyCharacters(element){
        $(element).inputFilter(function(value){
        return /^[a-z ]*$/i.test(value) }, "Dovresti inserire solo i caratteri A-Z.");
        };
        /**
     * Filtro generico per i valori interi delle valute ammette 2 cifre decimali dopo la virgola, da utilizzarlo per le input type che necessitano un controllo.
     * @param {} element valore dell'elemento nel dom, tramite un ID o proprio il tag.
     */
    function filterCurrencys(element){
        $(element).inputFilter(function(value){
        return /^-?\d*[.,]?\d{0,2}$/.test(value); }, "Inserisci il valore seguito da al massimo 2 cifre dopo la virgola.");
        };

    function passwordStrenght(element){
      $(element).inputFilter(function(value){
          return value.length >=8 && /\d/.test(value) && /([a-z].*[A-Z])|([A-Z].*[a-z])/i.test(value)  && /([!,%,&,@,#,$,^,*,?,_,~])/.test(value)}, 
          "Inserisci almeno 8 caratteri, di cui:<br><ul type='circle'><li>Una lettera maiuscola</li><li>Un carattere speciale</li><li>Un numero</li></ul>")
    };

    var titolare = document.getElementById("titolare");
    filterOnlyCharacters(titolare);

    var numero = document.getElementById("numero");
    filterInteger(numero);
    var cvc = document.getElementById("cvc");
    filterIntegerBeetween(cvc);
    var password = document.getElementById("password");
    passwordStrenght(password);
    
});