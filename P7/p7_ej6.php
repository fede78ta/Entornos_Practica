<?php
$conec= mysqli_connect("localhost", "root", "", "base2");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P7 EJ6</title>
</head>
<body>
    <form action="">
        <label for="">Ingresar el mail:</label>
        <input type="mail" name="enviar">
        <input type="submit" name="enviar">
    </form>
</body>

<?php
if(isset($_POST["enviar"])){
    
}
?>
</html>