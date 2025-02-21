<?php
class Guardar extends Controller {
    public function __construct() {
        parent::__construct();
    }

    public function render() {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $correo = $_POST['correo'];
        $telefono = $_POST['telefono'];
        $this->guardarCambios($nombre, $apellido, $correo, $telefono);
        $this->view->render('configuracion/cambios');
    }
//guardar imagen falta modificar archivos vinculados
    public function guardarCambios($nombres, $apellidos, $correo, $telefono) {
        // Verificar si se ha enviado el formulario
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_FILES["imagen"]) && $_FILES["imagen"]["error"] == 0) {
                $imagenBase64 = base64_encode(file_get_contents($_FILES["imagen"]["tmp_name"]));
                $this->model->guardarCambios($nombres, $apellidos, $correo, $telefono, $imagenBase64);
                exit;
            } else {
                echo "<script>
                    alert('No se ha seleccionado ninguna imagen.')
                </script>";
                $this->model->guardarCambios($nombres, $apellidos, $correo, $telefono);
            }
            header('Location: ' . $_ENV['URL']);
        } else {
            echo "Acceso denegado.";
        }
    }
}