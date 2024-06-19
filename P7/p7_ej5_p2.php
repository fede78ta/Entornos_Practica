<?php
session_start();
$_SESSION["nombre"]= $_POST["nombre"];

$_SESSION["clave"]= $_POST["clave"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="p7_ej5_p3.php">Mostrar variables de sesion</a>
</body>
</html>