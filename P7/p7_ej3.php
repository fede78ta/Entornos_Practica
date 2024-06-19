<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P7 EJ3</title>
</head>
<body>
    <form action="" method="post">
         <p>Ingresar un nombre:</p>
        <input type="text" name="nombre">
        <input type="submit" name="enviar" value="Enviar">
    </form>
</body>
</html>
<?php
    if(isset($_POST["enviar"])){
        $nombre= $_POST["nombre"];
        setcookie("nombre", $nombre, time() + (60 * 60 * 24 * 90));
    }
    if(isset($_COOKIE["nombre"])){
        $nombre_A= $_COOKIE["nombre"];
        echo "El ultimo nombre es: $nombre_A ";
    }
?>