<?php
function fnConnect(){
	$cn=mysqli_connect("localhost","root","");
	if(!$cn){
		echo("<script>alert('Error en la conexión.')
		window.location.href = '../index';</script>");
		return 0;
	}
	$db = mysqli_select_db($cn,"drinkandfood");
	if(!$db){
		mysqli_close($cn);
		echo("<script>
		alert('Base de datos no existe.');
		window.location.href = '../index';
		</script>");
		return 0;
	}
	return $cn;
}

function fnConsultaSelect($consulta){
	// LLamar a la funcion de conexión que retorna la conexion
	$cn=fnConnect();
	// Realiza la petición a la base de datos y devuelte la tabla
	$tablaSQL = mysqli_query($cn,$consulta);
	return $tablaSQL;
}
function fnConsultaInsert($consulta){
	$cn = fnConnect();

	$respuesta = mysqli_query($cn, $consulta);
	return($respuesta);
}
function fnShowMsg($title,$msg){
    echo("<th>$title</th>"); 
	echo("<td>$msg</td>");
	echo("<a href='index.php'>Regresar</a>");
}
?>