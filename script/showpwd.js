$(document).ready( function(){

var showPasswordToggle=document.querySelector("#password");
/**
 * Cliccando sulla mia casella input type password, vado a modificare una sua classe, 
 * togliendo il diplay-none all'elemento bottone, così facendo visualizzo a video il bottone e posso utilizzarlo per gestire
 * la modifica della mia password.
 */
showPasswordToggle.onclick= function(){
    document.querySelector("#password").classList.add("input-password"); //casella inputTypePassword
    document.getElementById("toggle-password").classList.remove("d-none"); //btn per mostrare la password
    const togglePasswordButton= document.getElementById("toggle-password"); //elemento icona
    togglePasswordButton.addEventListener("click",togglePassword);
/**
 * Funzione toggler, che controlla l'input type dell'elemento password preso dal dom.
 */
    function togglePassword(){
if(showPasswordToggle.type === "password"){
    /**
     * Imposto come casella ti testo mostrando la password in chiaro, e mostro la relativa icona dell'occhio scoperto.
     */
        showPasswordToggle.type="text";
        document.getElementById("eyeIcon").classList.toggle("bi-eye"); //va ad aggiungere alla mia classe la classe bi-eye senza togliere la bi-eye-slash
    }else{
        /**
         * Imposto come password e tolgo l'icona dell'occhio scoperto.
         */
        showPasswordToggle.type="password";
        document.getElementById("eyeIcon").classList.toggle("bi-eye");
 }};
}
});

