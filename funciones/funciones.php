<?php
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
					<p class="perfil">Regístrate</p>
					</a>';
	} else {
		$texto = 	'<a class="perfil" href="'.$rutaPages.'cerrar.php">
					<p class="perfil">Bienvenido '. $_SESSION['nombre'] .'</p>
					</a>';
	}
	echo '
		<header class="contenido">
			<section class="titulo">
				<div class = "logo">
					<img class="logo" src="'. $rutaImg .'logo.png"> 
				</div>
				<div class = "nombre"> 
            		<h1>LIBERTY MARKET S.A.</h1>
            		<h3>¡COMPRA CON LIBERTAD!</h3> 
        		</div>
				<div class="perfil">
					<img class="perfil" src="' . $rutaImg . 'perfil.png">'
					. $texto .
				'</div>
        	</section>
			<nav class="botones">
				<a href="' . $rutaIndex . 'index.php"><button class="boton" >INICIO</button></a>
                <a href="' . $rutaPages . 'catalogo.php"><button class="boton" >CATÁLOGO</button></a>
				<a href="' . $rutaPages . 'carrito.php"><button class="boton" >CARRITO</button></a>
            </nav>
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