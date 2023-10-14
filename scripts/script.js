var formularioInicio = document.querySelector(".login");
var formularioRegistro = document.querySelector(".register");
var btnIniciar = document.getElementById("btnIniciar");
var btnCrear = document.getElementById("btnCrear");
function moverDerecha(){
    //Mostrar y ocultar el formulario

    // formularioInicio.style.opacity ="1";
    // formularioRegistro.style.opacity ="0";
    //Moverlos a la derecha
    formularioInicio.style.left = "376px";
    formularioRegistro.style.left ="-150%";
    //Animacion
    
}
function moverIzquierda(){
    //Mostrar y ocultar el formulario

    // formularioInicio.style.opacity ="0";
    // formularioRegistro.style.opacity ="1";
    //Moverlos a la izquierda
    formularioRegistro.style.left = "10px";
    formularioInicio.style.left = "200%";
    //Animacion
    
}
btnIniciar.addEventListener("click", moverDerecha);
btnCrear.addEventListener("click", moverIzquierda);
