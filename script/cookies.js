$(document).ready( function( ){    
/* Visualiizza il banner dei cookie 
function showCookieBanner(){
    
    let cookieBanner = document.getElementById("cb-cookie-banner");
    cookieBanner.style.display = "block";
   }
   
   /* Nascondo il banner dei cookie e salvo in sessiostorage la scelta 
   function hideCookieBanner(){
    sessionStorage.setItem("cb_isCookieAccepted", "yes");
    let cookieBanner = document.getElementById("cb-cookie-banner");
    cookieBanner.style.display = "none";
   }
   
  
   function initializeCookieBanner(){
    if(sessionStorage.getItem("cb_isCookieAccepted") == "yes" && sessionStorage.getItem("cb_isCookieAccepted") !== null){
        hideCookieBanner();
    }else{
        showCookieBanner();
    }
    let isCookieAccepted = sessionStorage.setItem("cb_isCookieAccepted","no");
    if((isCookieAccepted === null) || (isCookieAccepted === "no"))
    {
     showCookieBanner();
    }
}
*/
  function hideCookieBanner(){
    let cookieBanner = document.getElementById("cb-cookie-banner");
    cookieBanner.style.display = "none";
    }

  function showCookieBanner(){
    let cookieBanner = document.getElementById("cb-cookie-banner");
    cookieBanner.style.display = "block";
  }

  function setCookie(cname,cvalue,exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    let expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
  }
  
  function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i < ca.length; i++) {
      let c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }
  function isCookieAccepted(){
      let val = "yes"
      setCookie("_CkAccepted",val,1); //Validità 1 giorno
      hideCookieBanner();
  }

  function isCookiesRefused(){
     let val = "no";
                setCookie("_CkAccepted",val,1);
                hideCookieBanner();
  }
  function checkCookies(){
      if(getCookie("_CkAccepted") === "no" || getCookie("_CkAccepted") == null || getCookie("_CkAccepted") == ""){
          showCookieBanner(); 
          let btnAccetta = document.getElementById("ck_accetta").addEventListener("click", isCookieAccepted());
          let btnRifiuta = document.getElementById("ck_rifiuta").addEventListener("click", isCookiesRefused());
      }else { //se è impostato a yes, nascondo il banner.
          hideCookieBanner(); //entra sempre qua, non so il motivo
      }
  }
  window.onload = checkCookies();
});