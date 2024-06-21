<?php
$conec= mysqli_connect("localhost", "root", "", "base2");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 6</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Ingresar el mail:</label>
        <input type="mail" name="mail">
        <input type="submit" name="enviar">
    </form>
    <a href="ej6_verificacion.php">Verificacion de variable</a>
</body>

<?php
if(isset($_POST["enviar"])){
    $mail = $_POST["mail"];
    $resp = mysqli_query($conec ,"SELECT nombre FROM alumnos WHERE mail LIKE '$mail' ");
    session_start();
    $nombre = mysqli_fetch_array($resp);
    $_SESSION["nombre"]= $nombre["nombre"];
    
}
?>
</html>