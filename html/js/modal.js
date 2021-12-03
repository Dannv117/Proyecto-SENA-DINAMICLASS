/*Mi perfil*/
let cerrar = document.querySelectorAll(".close")[0];
let abrir = document.querySelectorAll(".cta")[0];
let modal = document.querySelectorAll(".modal")[0];
let modalC = document.querySelectorAll(".modal-container")[0];





abrir.addEventListener("click",function(e){
	e.preventDefault();
    modalC.style.opacity ="1";
    modalC.style.visibility="visible";
    modal.classList.toggle("modal-close");

});

cerrar.addEventListener("click",function(e){
   modal.classList.toggle("modal-close");

   setTimeout(function(){
    modalC.style.opacity ="0";
    modalC.style.visibility="hidden";
 },800);

});
/*Fin de mi perfil*/


/*Inicio de Cambio De foto*/

let cerrarfo = document.querySelectorAll(".closefo")[0];
let abrirfo = document.querySelectorAll(".ctafoto")[0];
let modalfo = document.querySelectorAll(".modal2")[0];
let modalCfo = document.querySelectorAll(".modal2-container2")[0];

abrirfo.addEventListener("click",function(e){
	e.preventDefault();
    modalCfo.style.opacity ="1";
    modalCfo.style.visibility="visible";
    modalfo.classList.toggle("modal2-close2");

});


cerrarfo.addEventListener("click",function(e){
   modalfo.classList.toggle("modal2-close2");

   setTimeout(function(){
    modalCfo.style.opacity ="0";
    modalCfo.style.visibility="hidden";
 },800);

});


/*Fin de Cambio De foto*/


/*Inicio Actualizar Datos*/

let cerrar3 = document.querySelectorAll(".close3")[0];
let abrir3 = document.querySelectorAll(".ctadatos")[0];
let modal3 = document.querySelectorAll(".modal3")[0];
let modalC3 = document.querySelectorAll(".modal3-container3")[0];

abrir3.addEventListener("click",function(e){
  e.preventDefault();
    modalC3.style.opacity ="1";
    modalC3.style.visibility="visible";
    modal3.classList.toggle("modal3-close3");

});


cerrar3.addEventListener("click",function(e){
   modal3.classList.toggle("modal3-close3");

   setTimeout(function(){
    modalC3.style.opacity ="0";
    modalC3.style.visibility="hidden";
 },800);

});


/*Fin de Actualizar Datos*/



/*Inicio Registrar Uusario*/

let cerrarre = document.querySelectorAll(".closere")[0];
let abrirre = document.querySelectorAll(".ctare")[0];
let modalre = document.querySelectorAll(".modalre")[0];
let modalCre = document.querySelectorAll(".modalre-containere")[0];

abrirre.addEventListener("click",function(e){
  e.preventDefault();
    modalCre.style.opacity ="1";
    modalCre.style.visibility="visible";
    modalre.classList.toggle("modalre-closere");

});


cerrarre.addEventListener("click",function(e){
   modalre.classList.toggle("modalre-closere");

   setTimeout(function(){
    modalCre.style.opacity ="0";
    modalCre.style.visibility="hidden";
 },800);

});


/*Fin de Registrar Uusario*/
