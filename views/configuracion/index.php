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
            max-width: 600px;
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
    </style>
</head>
<body>
    <div class="container">
        <form method="post" action="guardar_cambios.php" enctype="multipart/form-data">
            <div class="profile-container">
                <?php
                    if (isset($_SESSION["imagen"])) {
                        echo "<img class='profile-image' src='data:image/jpg;base64," . base64_encode($_SESSION['imagen']) . "' alt='Profile Image'>";
                    } else {
                        echo "<img class='profile-image' src='content/img/foto-perfil.png' alt='Profile Image'>";
                    }
                ?>
                <div class="profile-details">
                    <p><?php echo $_SESSION["Nombres"] . " " . $_SESSION["Apellidos"]; ?></p>
                    <br/><p><?php echo $_SESSION["Correo"]; ?></p>
                    <br/><p><?php echo $_SESSION["Telefono"]; ?></p>
                    <!-- <input type="file" name="imagen" accept="image/*">
                    <input type="text" name="nombre" placeholder="Nombre">
                    <input type="tel" name="telefono" placeholder="Teléfono"> -->
                </div>
            </div>
            <button type="submit">Guardar Cambios</button>
        </form>
    </div>
</body>
</html>
