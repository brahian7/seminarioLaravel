<?php

$mensaje = "";
$nombre_mostrado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (
        !empty($_POST["nombre"]) &&
        !empty($_POST["email"]) &&
        !empty($_POST["telefono"])
    ) {

        if (is_numeric($_POST["telefono"])) {

            $nombre_mostrado = htmlspecialchars($_POST["nombre"]);
            $mensaje = "¡Bienvenido, $nombre_mostrado!";

        } else {

            $mensaje = "El teléfono debe ser numérico.";

        }

    } else {

        $mensaje = "Todos los campos son obligatorios.";

    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
</head>
<body>

    <h2>Registro Rápido</h2>

    <p style="color:blue;">
        <?php echo $mensaje; ?>
    </p>

    <form method="POST" action="">
       
        <label>Nombre:</label>
        <input type="text" name="nombre">
        <br><br>

        <label>Email:</label>
        <input type="email" name="email">
        <br><br>

        <label>Teléfono:</label>
        <input type="text" name="telefono">
        <br><br>

        <button type="submit">Enviar</button>

    </form>

</body>
</html>
