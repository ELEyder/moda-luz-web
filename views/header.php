<?php
	session_start();
	if (isset($_SESSION["Nombres"])){
		echo "<link rel='stylesheet' href='content/styles/header.css'>
		<header>
			<div class = 'logo'>
				<a href='main'>
					<img class='logo' src='content/img/logo.png'> 
				</a>
			</div>
			<h1 class='titulo'>Moda's Luz</h1>
				<form class='buscador' action='buscador' method='get'>
					<input class='buscador' type='text' placeholder='Busca en Liberty Market' name='busqueda'>
					<button class='buscador' type='submit'><img class='lupa' src='content/img/icons/lupa.svg' alt=''></button>
				</form>
				<a href='cerrar'>
			<div class='mi-cuenta'>	
					<h1 class='mi-cuenta' >". $_SESSION["Nombres"] . "</h1>
					<img class='mi-cuenta' src='content/img/". $_SESSION["IdUsuario"] . ".png' alt='foto'>
			</div>
			</a>
			<div class='carrito'>
				<img class='carrito' src='content/img/icons/cart.svg' alt='Carrito de Compras'>
			</div>
	</header>";
	} else {
		echo "<link rel='stylesheet' href='content/styles/header.css'>
		<header>
			<div class = 'logo'>
				<a href='main'>
					<img class='logo' src='content/img/logo.png'> 
				</a>
			</div>
			<h1 class='titulo'>Moda's Luz</h1>
				<form class='buscador' action='buscador' method='get'>
					<input class='buscador' type='text' placeholder='Busca en Liberty Market' name='busqueda'>
					<button class='buscador' type='submit'><img class='lupa' src='content/img/icons/lupa.svg' alt=''></button>
				</form>
				<a href='form'>
			<div class='mi-cuenta'>	
					<h1 class='mi-cuenta' >Mi Cuenta</h1>
					<img class='mi-cuenta' src='content/img/foto-perfil.png' alt='foto'>
			</div>
			</a>
			<div class='carrito'>
				<img class='carrito' src='content/img/icons/cart.svg' alt='Carrito de Compras'>
			</div>
	</header>";
	}
?>
