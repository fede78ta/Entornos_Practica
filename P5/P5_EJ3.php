<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Recomendar sitio web</h1>
    <form action="" method="post">
        <label for="">E-mail del amigo a recomendar:<input type="text" name="mail"></label>
        <br>
        <br>
        <label>Razones de porque recomiendas el sitio web:<br><textarea type="text" name="recomendacion"></textarea></label>
        <br>
        <br>
        <input type="submit" name="enviar" value="Enviar">
    </form>
</body>

<?php

$destinatario= $_POST["mail"];
$asunto="Recomendacion de un amigo";
$recomendacion= $_POST["recomendacion"];

if(isset($_POST["enviar"])){

mail($destinatario,$asunto,$recomendacion);
echo "Se a enviado la recomendacion";
}
?>
</html>