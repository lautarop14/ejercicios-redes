<?php
// Recuperamos los datos enviados por el formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Respuesta</title>
</head>
<body>
    <h1>Respuesta del formulario</h1>

    <p>Nombre: <?php echo $nombre; ?></p>
    <p>Apellido: <?php echo $apellido; ?></p>

    <!-- Botón para volver al formulario -->
    <form action="index.html" method="get">
        <input type="submit" value="Volver">
    </form>
</body>
</html>
