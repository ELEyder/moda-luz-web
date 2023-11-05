<?php
        while ($row = mysqli_fetch_array($this->tablaSQL ,MYSQLI_ASSOC)) {
            session_start();
            $_SESSION['IdUsuario'] = $row['IdUsuario'];
            $_SESSION['IdRol'] = $row['IdRol'];
            $_SESSION['Nombres'] = $row['Nombres'];
            $_SESSION['Apellidos'] = $row['Apellidos'];
            $_SESSION['Correo'] = $row['Correo'];
            $_SESSION['Contrasena'] = $row['Contrasena'];
        }
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="content/styles/style.css">
    <title>Inicio Exitoso</title>
</head>
<body>
    <script>
        alert("Inicio Exitoso");
        location.href = "main";
    </script>

</body>
</html>