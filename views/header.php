<?php
session_start();
	if (!isset($_SESSION['nombre'])){
		$texto = 	'<a class="perfil" href="'. $_ENV['URL'] .'form">
						Entrar
					</a>';
	} else {
		$texto = 	'
					<div class="foto-perfil">
						<img class="foto-perfil" src="content/img/foto-perfil.png">
					</div>
					<a href="'. $_ENV['URL'] .'form/cerrar">
					<div class="nombre-perfil">	
							<p class="nombre-perfil">'. $_SESSION['nombre'] .'</p>	
					</div>
					</a>';
					
	}
	echo '
		<header>
			<div class = "logo">
				<a href="views/home/index.php">
					<img class="logo" src="content/img/logo.png"> 
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
?>