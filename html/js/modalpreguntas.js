

/*Inicio Registrar Pregunta*/

let cerrarpre = document.querySelectorAll(".closepre")[0];
let abrirpre = document.querySelectorAll(".pregunta")[0];
let modalpre = document.querySelectorAll(".modalpre")[0];
let modalCpre = document.querySelectorAll(".modalpre-containerpre")[0];

abrirpre.addEventListener("click",function(e){
  e.preventDefault();
    modalCpre.style.opacity ="1";
    modalCpre.style.visibility="visible";
    modalpre.classList.toggle("modalpre-closepre");

});


cerrarpre.addEventListener("click",function(e){
   modalpre.classList.toggle("modalpre-closepre");

   setTimeout(function(){
    modalCpre.style.opacity ="0";
    modalCpre.style.visibility="hidden";
 },800);

});


/*Fin de Registrar Pregunta*/

/*Inicio elegir pregunta*/

let cerrarre = document.querySelectorAll(".closere")[0];
let abrirre = document.querySelectorAll(".añadir")[0];
let modalre = document.querySelectorAll(".modalpre")[0];
let modalCre = document.querySelectorAll(".modalpre-containepre")[0];

abrirre.addEventListener("click",function(e){
  e.preventDefault();
    modalCre.style.opacity ="1";
    modalCre.style.visibility="visible";
    modalre.classList.toggle("modalpre-closepre");

});


cerrarre.addEventListener("click",function(e){
   modalre.classList.toggle("modalpre-closepre");

   setTimeout(function(){
    modalCre.style.opacity ="0";
    modalCre.style.visibility="hidden";
 },800);

});


/*Fin de elegir pregunta*/

/*Inicio Afirmacion*/

let cerrarafir = document.querySelectorAll(".closeafir")[0];
let abrirafir = document.querySelectorAll(".Afirmacion")[0];
let modalafir = document.querySelectorAll(".modalafir")[0];
let modalCafir = document.querySelectorAll(".modalafir-containerafir")[0];

abrirafir.addEventListener("click",function(e){
  e.preventDefault();
    modalCafir.style.opacity ="1";
    modalCafir.style.visibility="visible";
    modalafir.classList.toggle("modalafir-closeafir");

});

cerrarafir.addEventListener("click",function(e){
   modalafir.classList.toggle("modalafir-closeafir");

   setTimeout(function(){
    modalCafir.style.opacity ="0";
    modalCafir.style.visibility="hidden";
 },800);

});


/*Fin de Afirmacion*/




