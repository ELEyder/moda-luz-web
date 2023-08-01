<?php
function fnMostrarCabecera(){
	echo '
		<header class="contenido">
			<div> 
            	<img class="logo" src="fotos/logo.png"> 
        	</div> 
        	<div class="titulo"> 
            	<h1>MERCADO MORADO S.A.</h1>
            	<h3>¡DONDE COMPRAR ES UN PLACER!</h3> 
        	</div>
		</header>
	';
}
function fnMostrarPie(){
	echo '
	<footer class="contenido">
		<p>Av. Paseo de la República 3455 Lima</p>
        <p>Teléfono: +51 919 593 169</p>
	</footer>
		';
}
function say($cad){
	echo $cad . "\n";//Concatenar y hacer Salto de linea
}
?>