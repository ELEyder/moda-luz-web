var formularioInicio = document.querySelector(".register");
var formularioRegistro = document.querySelector(".login");
var btnIniciar = document.getElementById("btnIniciar");

function moverDerecha(){
    formularioInicio.style.display = "none";
    formularioRegistro.style.display ="block";
}
btnIniciar.addEventListener("click", moverDerecha);
