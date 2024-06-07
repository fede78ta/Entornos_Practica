<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $conec=mysqli_connect("localhost","root","","capitales");
    ?>
    <h1>Baja</h1>
    <form method="post">
        <label for="">Ingresar el id de la ciudad a dar de baja: <input type="number" name="id"></label>
        <input type="submit" name="baja">
    </form>
    <a href="p6_ej2.html">Volver al menu</a>

    <?php

    if(isset($_POST["baja"])){
        $id= $_POST["id"];

        $baja = "DELETE FROM `ciudades` WHERE id = $id";
        $r= mysqli_query($conec, $baja);
    }

?>



</body>
</html>