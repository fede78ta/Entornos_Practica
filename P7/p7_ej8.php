<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 8</title>
    <?php
        $link = mysqli_connect("localhost", "root", "", "prueba");
        
    ?>
</head>
<body>

    <form action="" method="POST" >
        <p>Ingresar el nombre de la cancion a buscar:</p>
        <input type="text" name="cancion">
        <input type="submit" name="buscar" value="buscar">
    </form>

    <?php
        if(isset($_POST["buscar"])){

            $cancion= $_POST["cancion"];
            $resp = mysqli_query($link ,"SELECT * FROM buscador WHERE canciones LIKE '%".$cancion."%' ");
            if(mysqli_num_rows($resp) == "0"){
                echo "No se encuentra esa cancion";
            }else{

                echo "Resultados de la busqueda";

                while($cat = mysqli_fetch_array($resp)){
                    ?>
                    <br>
                    <?php
                    echo ($cat['canciones']);
                }
            }
        }


    ?>

</body>
</html>