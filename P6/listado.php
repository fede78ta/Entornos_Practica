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

    <h1>Listado</h1>
    <table>
        <td>id</td>
        <td>Ciudad</td>
        <td>Pais</td>
        <td>Habitantes</td>
        <td>Superficie</td>
        <td>Tiene Metro</td>

        <?php

            $listado= "SELECT * FROM Ciudades";
            $r= mysqli_query($conec,$listado); 

            while($mostrar=mysqli_fetch_array($r)){

        ?>

        <tr>
            <td><?php echo $mostrar["id"] ?></td>
            <td><?php echo $mostrar["ciudad"] ?></td>
            <td><?php echo $mostrar["pais"] ?></td>
            <td><?php echo $mostrar["habitantes"] ?></td>
            <td><?php echo $mostrar["superficie"] ?></td>
            <td><?php echo $mostrar["tieneMetro"] ?></td>
        </tr>        

        <?php
            }
        ?>
    </table>
    <a href="p6_ej2.html">Volver al menu</a>
</body>
</html>