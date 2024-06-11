<?php
Class Database {
	private $connection;
	function __construct(){
		$host = $_ENV['DB_HOST'];
        $db = $_ENV['DB_NAME'];
        $user = $_ENV['DB_USER'];
        $pass = $_ENV['DB_PASS'];
		$dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";

		$options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

		try {
            $this->connection = new PDO($dsn, $user, $pass, $options);
        } catch (PDOException $e) {
            throw new Exception("Connection failed: " . $e->getMessage());
        }
	}

	public function connect() {
        return $this->connection;
    }
}





/*
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
*/
?>