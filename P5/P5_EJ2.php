<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contacto</h1>
    <form action="" method="post">
        <input type="text" name="name">
        <br>
        <textarea type="text" name="consulta"></textarea>
        <br>
        <br>
        <input type="submit" name="enviar" value="Enviar">
    </form>
</body>

<?php

$destinatario="fede.154@gmail.com";
$asunto="Consulta";
$consulta= "Nombre:" . $_POST["name"] . "Consulta:" . $_POST["consulta"];

if(isset($_POST["enviar"])){
    mail($destinatario,$asunto,$consulta);
    echo "Se a enviado el mail";
}
?>
</html>