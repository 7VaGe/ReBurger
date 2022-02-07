var today = new Date();
var hour = today.getHours();
var greeting;

if( hour >18){
    greeting= "Buonasera!";
}else if( hour > 12){
    greeting = "Buon pomeriggio!";
}else if( hour > 0){
    greeting ="Good Morning!";
}else {
    greeting = "Benvenuto!"
}

document.write(`<div class="col-12 text-white text-center rounded border shadow-lg" ><h3>` + greeting + `</h3></div>`);

