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
						Entrar
					</a>';
	} else {
		$texto = 	'
					<div class="foto-perfil">
						<img class="foto-perfil" src="'. $rutaImg .'foto-perfil.png">
					</div>
					<a href="'.$rutaPages.'cerrar.php">
					<div class="nombre-perfil">	
							<p class="nombre-perfil">'. $_SESSION['nombre'] .'</p>	
					</div>
					</a>';
					
	}
	echo '
		<header>
			<div class = "logo">
				<a href="'. $rutaIndex .'">
					<img class="logo" src="'. $rutaImg .'logo.png"> 
				</a>
			</div>
			<div class = "titulo"> 
            	<h1 class="titulo">LIBERTY MARKET</h1>
			</div>
			<div class="buscador">
				<input class="buscador" type="text" placeholder="Busca en el catálogo de Liberty Market" name="busqueda"> 
			</div>
			<div class="perfil">'
				. $texto .
			'</div>
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