<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables de Servidor</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

    <h1>Variables de servidor</h1>
    <table>
        <tr><td><strong>SERVER_ADDR</strong></td><td><?php echo $_SERVER['SERVER_ADDR']; ?></td></tr>
        <tr><td><strong>SERVER_PORT</strong></td><td><?php echo $_SERVER['SERVER_PORT']; ?></td></tr>
        <tr><td><strong>SERVER_NAME</strong></td><td><?php echo $_SERVER['SERVER_NAME']; ?></td></tr>
        <tr><td><strong>HTTP_HOST</strong></td><td><?php echo $_SERVER['HTTP_HOST']; ?></td></tr>
        <tr><td><strong>DOCUMENT_ROOT</strong></td><td><?php echo $_SERVER['DOCUMENT_ROOT']; ?></td></tr>
    </table>

    <h1>Variables de cliente</h1>
    <table>
        <tr><td><strong>REMOTE_ADDR</strong></td><td><?php echo $_SERVER['REMOTE_ADDR']; ?></td></tr>
        <tr><td><strong>REMOTE_PORT</strong></td><td><?php echo $_SERVER['REMOTE_PORT']; ?></td></tr>
    </table>

    <h1>Variables de Requerimiento</h1>
    <table>
        <tr><td><strong>SCRIPT_NAME</strong></td><td><?php echo $_SERVER['SCRIPT_NAME']; ?></td></tr>
        <tr><td><strong>REQUEST_METHOD</strong></td><td><?php echo $_SERVER['REQUEST_METHOD']; ?></td></tr>
        <tr><td><strong>REQUEST_URI</strong></td><td><?php echo $_SERVER['REQUEST_URI']; ?></td></tr>
        <tr><td><strong>QUERY_STRING</strong></td><td><?php echo $_SERVER['QUERY_STRING']; ?></td></tr>
    </table>

    <h1>TODAS</h1>
    <table>
        <?php
            foreach ($_SERVER as $key => $value) {
                echo "<tr><td><strong>$key</strong></td><td>$value</td></tr>";
            }
        ?>
    </table>

</body>
</html>
