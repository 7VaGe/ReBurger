$(document).ready( function() {

/* Visualiizza il banner dei cookie */
function showCookieBanner(){
    let cookieBanner = document.getElementById("cb-cookie-banner");
    cookieBanner.style.display = "block";
   }
   
   /* Nascondo il banner dei cookie e salvo in memoria locale la scelta */
function hideCookieBanner(){
    localStorage.setItem("cb_isCookieAccepted", "yes");
    let cookieBanner = document.getElementById("cb-cookie-banner");
    cookieBanner.style.display = "none";
   }
   
   /* Controllo la memoria locale e mostro il banner */
   function initializeCookieBanner(){
    let isCookieAccepted = localStorage.getItem("cb_isCookieAccepted");
    if(isCookieAccepted === null)
    {
     localStorage.setItem("cb_isCookieAccepted", "no");
     showCookieBanner();
    }
    if(isCookieAccepted === "no"){
     showCookieBanner();
    }
   }
   
   window.onload = initializeCookieBanner();
   window.cb_hideCookieBanner = hideCookieBanner;



});

