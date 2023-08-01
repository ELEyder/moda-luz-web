<?php
function fnConnect( &$msg ){
	$cn=mysqli_connect("localhost","root","");
	if(!$cn){
		$msg = "Error en la conexión.";
		return 0;
	}
	$n = mysqli_select_db($cn,"drinkandfood");
	if(!$n){
		$msg = "Base de datos no existe.";
		mysqli_close($cn);
		return 0;
	}
	return $cn;
}
function fnSelectProductos(){
	// LLamar a la funcion de conexión que retorna la conexion
	$cn=fnConnect($msg);
	// Si no hay conexión se muestra error y se regresa
	if(!$cn){
		fnShowMsg("Error",$msg); // Mostrar mensaje de error
		return; // Salir
	}
	// Si no
	else{
		// Realiza la petición a la base de datos y devuelte la tabla
		$tablaSQL = mysqli_query($cn,"select * from productos");
		return $tablaSQL;
	}
}
function fnShowMsg($title,$msg){
    echo("<th>$title</th>"); 
	echo("<td>$msg</td>");
	echo("<a href='index.php'>Regresar</a>");
}
?>