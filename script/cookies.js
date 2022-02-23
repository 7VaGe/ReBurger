$(document).ready( function( ){



/* Visualiizza il banner dei cookie */
function showCookieBanner(){
    let cookieBanner = document.getElementById("cb-cookie-banner");
    cookieBanner.style.display = "block";
   }
   
   /* Nascondo il banner dei cookie e salvo in sessiostorage la scelta */
   function hideCookieBanner(){
    sessionStorage.setItem("cb_isCookieAccepted", "yes");
    let cookieBanner = document.getElementById("cb-cookie-banner");
    cookieBanner.style.display = "none";
   }
   
  
   function initializeCookieBanner(){
    let isCookieAccepted = sessionStorage.setItem("cb_isCookieAccepted","no");
    if((isCookieAccepted === null) || (isCookieAccepted === "no"))
    {
     showCookieBanner();
    }
}

   window.onload = initializeCookieBanner();
   window.cb_hideCookieBanner = hideCookieBanner;
   });