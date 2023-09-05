<?php

//----------------------------------------------------------------- CABECERAS ------------------------------------------------------------------
function fnMostrarCabecera($origen = ""){
	if ($origen == "index"){
		$rutaImg = "img/";
		$rutaPages = "pages/";
		$rutaIndex = "";
	}
	else {
		$rutaImg = "../img/";
		$rutaPages = "";
		$rutaIndex = "../";
	}
	session_start();
	if (!isset($_SESSION['nombre'])){
		$texto = 	'<a class="perfil" href="'.$rutaPages.'formulario.php">
					<button class="perfil">Entrar</button>
					</a>';
	} else {
		$texto = 	'<a class="perfil" href="'.$rutaPages.'cerrar.php">
					<p class="perfil">Bienvenido '. $_SESSION['nombre'] .'</p>
					</a>';
	}
	echo '
		<header class="contenido">
			<section class="nombre">
				<div class = "logo">
					<img class="logo" src="'. $rutaImg .'logo.png"> 
				</div>
				<div class = "busqueda"> 
            		<h1>LIBERTY MARKET S.A.</h1>
					<input class="buscador" type="text" placeholder="Busca en el catálogo de Liberty Market" name="busqueda">
        		</div>
				<div class="perfil">
					<div class="texto-perfil">'
					. $texto .
					'</div>
				</div>
        	</section>
		</header>
	';
}
function fnMostrarPie($origen = "pages/nosotros.php"){
	if ($origen == "index"){
		$ruta = "pages/nosotros.php";
	}
	else {
		$ruta = "nosotros.php";
	}
	echo '
	<footer class="contenido">
		<p>Av. Paseo de la República 3455 Lima</p>
        <p>Teléfono: +51 919 593 169</p>
		<a class="nosotros" href="' . $ruta . '">Quieres Somos</a> 
	</footer>
		';
}
?>