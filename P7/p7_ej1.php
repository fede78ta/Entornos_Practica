<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P7 EJ1</title>
</head>
<body>
    <form action="" method="POST">
        <p>Elegir el color de fondo:</p>
        <select name="estilo" id="">
            <option value="Rojo">Rojo</option>
            <option value="Verde">Verde</option>
            <option value="Negro">Negro</option>
        </select>
        <input type="submit" value="Cambiar">
    </form>
</body>
</html>

<?php
if(isset($_POST["estilo"])){
    $estilo= $_POST["estilo"];
    setcookie("estilo", $estilo, time() + (60 * 60 * 24 * 90));
}else{
    if(isset($_POST["estilo"])){
        $estilo= $_COOKIE("estilo");

    }
}

if(isset($estilo)){

    echo '<link rel="stylesheet" type="text/css" href="'. $estilo .'.css">';
}

?>

