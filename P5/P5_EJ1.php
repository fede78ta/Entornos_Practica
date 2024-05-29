<?php

$destinatario = "fede.t.154@gmail.com";
$asunto = "Prueba";
$cuerpo = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Esto es una prueba</h1>
</body>
</html>
';

$headers = "From: noreply@example.com\r\n";
$headers .= "Content-type:text/html; charset=iso-8859-1\r\n";

mail($destinatario,$asunto,$cuerpo,$headers)

?>