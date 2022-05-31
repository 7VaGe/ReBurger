function hideElement(element){
    element 
    .removeClass("selected")
    .next().slideUp();

}


$(document).ready(function(){

 $("#Order").click(function (){
    if($(this).hasClass("selected")){
       hideElement($(this));
       
    }else{
       hideElement($("div.selected"));
        $(this)
        .addClass("selected")
        .next().slideDown();
    }

});
});