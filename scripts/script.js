var formularioInicio = document.querySelector(".login");
var formularioRegistro = document.querySelector(".register");
var btnIniciar = document.getElementById("btnIniciar");
var btnCrear = document.getElementById("btnCrear");
function moverDerecha(){
    formularioInicio.style.display = "block";
    formularioRegistro.style.display ="none";
    formularioInicio.style.marginLeft = "430px";
}
function moverIzquierda(){
    formularioInicio.style.display = "none";
    formularioRegistro.style.display ="block";
    formularioInicio.style.marginLeft = "0px";
}
btnIniciar.addEventListener("click", moverDerecha);
btnCrear.addEventListener("click", moverIzquierda);
