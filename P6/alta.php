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
    <h1>Alta</h1>
    <form method="post">
        <p>Ciudad:<input type="text" name="ciudad"></p>
        <p>Pais:<input type="text" name="pais"></p>
        <p>Habitantes:<input type="number" name="habitantes"></p>
        <p>Superficie:<input type="text" name="superficie"></p>
        <p>Tiene metro:
            <label>Si <input type="radio" name="metro" value="si"></label>
            <label>No <input type="radio" name="metro" value="no"></label>
        </p>
        <input type="submit" name="alta">
    </form>
    <a href="p6_ej2.html">Volver al menu</a>

    <?php

    if(isset($_POST["alta"])){
        $ciudad= $_POST["ciudad"];
        $pais= $_POST["pais"];
        $habitantes= $_POST["habitantes"];
        $superficie= $_POST["superficie"];
        if ($_POST["metro"] == "si"){
            $metro= 1;
        }else{
            $metro= 0;
        }
        $alta = "INSERT INTO `ciudades`(`ciudad`, `pais`, `habitantes`, `superficie`, `tieneMetro`) VALUES ('$ciudad','$pais','$habitantes','$superficie','$metro')";
        $r= mysqli_query($conec, $alta);
    }

    ?>

</body>
</html>