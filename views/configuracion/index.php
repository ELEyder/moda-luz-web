<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Configuration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        .container {
            max-width: 742px;
            margin: 50px auto;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            box-sizing: border-box;
        }

        .profile-container {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .profile-image {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
        }

        .profile-details {
            margin-left: 20px;
        }

        input[type="text"],
        input[type="tel"],
        input[type="file"],
        button {
            padding: 10px;
            margin-bottom: 10px;
            width: calc(100% - 20px);
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }

        input[type="file"] {
            padding: 0;
        }

        button {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        

        .td1-contenido {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <form method="post" action="guardar_cambios.php" enctype="multipart/form-data">
            <div class="profile-container">
                <table style="padding: 10px; width: 100%; box-sizing: border-box;" cellspacing="0" cellpadding="0">
                    <tr>
                        <td style=" width: 240px; background-color:#ccc">
                            <div class="td1-contenido">
                                <?php
                                if (isset($_SESSION["imagen"])) {
                                    echo "<img id='imgprofile' class='profile-image' src='data:image/jpg;base64," . base64_encode($_SESSION['imagen']) . "' alt='Profile Image'>";
                                } else {
                                    echo "<img id='imgprofile' class='profile-image' src='content/img/foto-perfil.png' alt='Profile Image'>";
                                }
                                ?>
                                <div class="input-file-container">
                                    <input class="input-file" type="file" name="imagen" accept="image/*" onchange="previewImage(event)">
                                </div>

                            </div>

                        </td>
                        <td>

                            <div class="profile-details">
                                <!-- Detalles del perfil -->
                                <table cellspacing="0" cellpadding="0" style="padding: 0; width: 100%; box-sizing: border-box;">
                                    <tr>
                                        <td>
                                            <p id="nombreText"><?php echo $_SESSION["Nombres"]; ?></p>
                                        </td>
                                        <td>
                                        <input id="nombreInput" class="edit-input" type="text" name="nombre" placeholder="Nombre" style="display: none;">
                                        </td>
                                        <td>
                                            <img id="editnombre" src="content/img/boligrafo.png" alt="Editar" onclick="editarTexto('nombre')">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p id="apellidoText"><?php echo $_SESSION["Apellidos"]; ?></p>
                                        </td>
                                        <td>
                                            <input id="apellidoInput" class="edit-input
                                            " type="text" name="apellido" placeholder="Apellido" style="display: none;">
                                        </td>
                                        <td>
                                            <img id="editapellido" src="content/img/boligrafo.png" alt="Editar" onclick="editarTexto('apellido')">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p id="correoText"><?php echo $_SESSION["Correo"]; ?></p>
                                        </td>
                                        <td>
                                            <input id="correoInput" class="edit-input" type="text" name="correo" placeholder="Correo" style="display: none;">
                                        </td>
                                        <td>
                                            <img id="editcorreo" src="content/img/boligrafo.png" alt="Editar" onclick="editarTexto('correo')">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p id="telefonoText"><?php echo $_SESSION["Telefono"]; ?></p>
                                        </td>
                                        <td>
                                            <input id="telefonoInput" class="edit-input" type="text" name="telefono" placeholder="Teléfono" style="display: none;">
                                        </td>
                                        <td>
                                            <img id="edittelefono" src="content/img/boligrafo.png" alt="Editar" onclick="editarTexto('telefono')">
                                        </td>
                                    </tr>
                                </table>

                                <!-- <input type="text" name="nombre" placeholder="Nombre">
                                <input type="tel" name="telefono" placeholder="Teléfono"> -->

                            </div>

                        </td>
                    </tr>
                </table>
            </div>
            <button type="submit">Guardar Cambios</button>
        </form>
    </div>
    <script>
        function previewImage(event) {
            const preview = document.getElementById('imgprofile');
            const file = event.target.files[0];
            const reader = new FileReader();

            reader.onloadend = function() {
                preview.src = reader.result;
            }

            if (file) {
                reader.readAsDataURL(file);
            } else {
                //preview.src = 'content/img/foto-perfil.png'; // Si no se selecciona ninguna imagen, se muestra una imagen predeterminada
            }
        }

        function editarTexto(nombreCampo) {
            const textoElemento = document.getElementById(nombreCampo + 'Text');
            const inputElemento = document.getElementById(nombreCampo + 'Input');
            const editElemento = document.getElementById('edit' + nombreCampo);

            if (textoElemento && inputElemento && editElemento) {
                textoElemento.style.display = 'none';
                inputElemento.style.display = 'block';
                inputElemento.value = textoElemento.textContent;
                //editElemento.style.display = 'none';
            }
        }
    </script>
</body>

</html>