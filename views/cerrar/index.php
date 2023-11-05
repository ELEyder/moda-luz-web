<?php
    session_start();
    session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="content/styles/style.css">
    <title>Sesión Cerrada</title>
</head>
<body>
    <script>
        alert("Sesión Cerrada");
        location.href = "main";
    </script>

</body>
</html>