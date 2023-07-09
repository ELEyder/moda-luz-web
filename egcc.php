
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
function say($cad){
	echo $cad . "\n";//Concatenar y hacer Salto de linea
}
function fnShowMsg($title,$msg){
    say("<table align='center' width='300' border='1'>");
    say("<tr>");
    say("<th>$title</th>");
    say("</tr>");
    say("<tr>");
	say("<td>$msg</td>");    
    say("</tr>");
    say("</table>");
}

?>