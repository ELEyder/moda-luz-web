<?php
function fnMostrarCabecera($origen){
	if ($origen == "index"){
		$ruta = "img/logo.png";
	}
	else {
		$ruta = "../img/logo.png";
	}
	echo '
		<header class="contenido">
			<div> 
            	<img class="logo" src="'. $ruta .'"> 
        	</div>
        	<div class="titulo"> 
            	<h1>MERCADO MORADO S.A.</h1>
            	<h3>¡DONDE COMPRAR ES UN PLACER!</h3> 
        	</div>
			<div class="perfil">
				<a class="login" href="pages/login.php">
					<img class="perfil" src="img/perfil.png">
					Iniciar<br>Sesión
				</a>
			</div>
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