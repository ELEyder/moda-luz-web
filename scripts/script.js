var formularioInicio = document.querySelector(".login");
var formularioRegistro = document.querySelector(".register");
var btnIniciar = document.getElementById("btnIniciar");
var btnCrear = document.getElementById("btnCrear");
function moverDerecha(){
    formularioInicio.style.display = "block";
    formularioRegistro.style.display ="none";
    formularioInicio.style.left = "0px";
    formularioInicio.style.right = "10px";
}
function moverIzquierda(){
    formularioInicio.style.display = "none";
    formularioRegistro.style.display ="block";
    formularioInicio.style.right = "0px";
    formularioInicio.style.left = "10px";
}
btnIniciar.addEventListener("click", moverDerecha);
btnCrear.addEventListener("click", moverIzquierda);
