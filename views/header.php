<?php
if (isset($_SESSION["Nombres"])) {
	echo "
		<header>
			<div class='logo'>
				<a href='main'>
					<img class='logo' src='content/img/logo/logo.png'> 
				</a>
			</div>
			<h1 class='titulo'>Moda's Luz</h1>
			<form class='buscador' action='buscador' method='get'>
				<input class='buscador' type='text' placeholder='Busca en Liberty Market' name='busqueda'>
				<button class='buscador' type='submit'><img class='lupa' src='content/img/icons/lupa.svg' alt=''></button>
			</form>

			<div class='mi-cuenta-conteiner'>
				<div class='mi-cuenta-contenido'>
					<div class='mi-cuenta'>    
						<h1 class='mi-cuenta' >" . $_SESSION["Nombres"] . "</h1>";



	if (isset($_SESSION["imagen"])) {
		// echo "<img class='mi-cuenta' src='data:image/jpg;base64," . base64_encode($_SESSION['imagen']) . "' alt='fotod'>";
		echo "<img class='mi-cuenta' src='content/img/foto-perfil/foto-perfil-2.png' alt='fotod'>";
	} else {
		echo "<img class='mi-cuenta' src='content/img/foto-perfil/foto-perfil-2.png' alt='foto'>";
	}







	echo "</div>
				</div>
				<div class='dropdown' id='dropdown'>
					<div class='dropdown-content'>
						<a href='configuracion'>Cambiar Foto</a>
						<a href='cerrar'>Cerrar Sesion</a>
					</div>
				</div>
			</div>


				
			<div class='carrito'>
				<img class='carrito' src='content/img/icons/cart.svg' alt='Carrito de Compras'>
			</div>
			<script>
				document.addEventListener('DOMContentLoaded', function() {
					var container = document.querySelector('.mi-cuenta-conteiner');
					var dropdown = document.getElementById('dropdown');

					container.addEventListener('click', function() {
						dropdown.classList.toggle('show');
					});
				});
			</script>
	</header>";
} else {
	echo "
		<header>
			<div class = 'logo'>
				<a href='main'>
					<img class='logo' src='content/img/logo/logo.png'> 
				</a>
			</div>
			<h1 class='titulo'>Moda's Luz</h1>
				<form class='buscador' action='buscador' method='get'>
					<input class='buscador' type='text' placeholder='Busca en Liberty Market' name='busqueda'>
					<button class='buscador' type='submit'><img class='lupa' src='content/img/icons/lupa.svg' alt=''></button>
				</form>
				<div class='mi-cuenta-conteiner'>
					<div class='mi-cuenta-contenido'>

					<div class='mi-cuenta'>    
						<h1 class='mi-cuenta' >Mi Cuenta</h1>
						<img class='mi-cuenta' src='content/img/foto-perfil/foto-perfil.png' alt='fotox'>
					</div>
					</div>
					<div class='dropdown' id='dropdown'>
						<div class='dropdown-content'>
							<a href='form'>Iniciar Sesion</a>
						</div>
					</div>
				</div>
							
			<div class='carrito'>
				<img class='carrito' src='content/img/icons/cart.svg' alt='Carrito de Compras'>
			</div>
			<script>
				document.addEventListener('DOMContentLoaded', function() {
					var container = document.querySelector('.mi-cuenta-conteiner');
					var dropdown = document.getElementById('dropdown');

					container.addEventListener('click', function() {
						dropdown.classList.toggle('show');
					});
				});
			</script>
	</header>";
}
