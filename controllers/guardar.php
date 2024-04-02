<?php
session_start();
class Guardar extends Controller {
    public function __construct() {
        parent::__construct();
    }

    public function render() {
        $correo = $_SESSION['Correo'];
        $contrasena = $_SESSION['Contrasena'];
        $contrasena = sha1($contrasena);
        $datosUsuario = $this->guardarImagen($correo , $contrasena);
        $this->view->tablaSQL = $datosUsuario;
        $this->view->render('configuracion/cambios');
    }
//guardar imagen falta modificar archivos vinculados
    public function guardarImagen($correo, $contrasena) {
        // Verificar si se ha enviado el formulario
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $idUsuario = $_SESSION['IdUsuario'];

            if (isset($_FILES["imagen"]) && $_FILES["imagen"]["error"] == 0) {
                $imagenBase64 = base64_encode(file_get_contents($_FILES["imagen"]["tmp_name"]));

                $tablaSQL = $this->model->guardarCambios($correo , $contrasena);

                
                header('Location: /configuracion');
                exit;
            } else {
                echo "No se ha seleccionado ninguna imagen.";
            }
        } else {
            echo "Acceso denegado.";
        }
    }
}
?>
