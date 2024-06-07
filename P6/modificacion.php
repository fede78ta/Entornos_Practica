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
    <h1>Modificacion</h1>
    <form method="post">
        <label for="">Ingresar el id de la ciudad a modificar: <input type="number" name="id"></label>
        <p>Ciudad:<input type="text" name="ciudad"></p>
        <p>Pais:<input type="text" name="pais"></p>
        <p>Habitantes:<input type="number" name="habitantes"></p>
        <p>Superficie:<input type="text" name="superficie"></p>
        <p>Tiene metro:
            <label>Si <input type="radio" name="metro" value="si"></label>
            <label>No <input type="radio" name="metro" value="no"></label>
        </p>
        <input type="submit" name="modificacion">
    </form>
    <a href="p6_ej2.html">Volver al menu</a>

    <?php
        if(isset($_POST["modificacion"])){
            $id= $_POST["id"];
            $ciudad= $_POST["ciudad"];
            $pais= $_POST["pais"];
            $habitantes= $_POST["habitantes"];
            $superficie= $_POST["superficie"];
            if ($_POST["metro"] == "si"){
                $metro= 1;
            }else{
                $metro= 0;
            }

            $modificar = "UPDATE `ciudades` SET `ciudad`='$ciudad',`pais`='$pais',`habitantes`='$habitantes',`superficie`='$superficie',`tieneMetro`='$metro' WHERE id = $id";
            $r= mysqli_query($conec, $modificar);
        }
    ?>
</body>
</html>