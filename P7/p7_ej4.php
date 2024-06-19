<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P7 EJ3</title>
</head>
<body>
    <?php
    if(isset($_COOKIE["titular"])){
        $titular_A= $_COOKIE["titular"];
        echo "$titular_A";
        ?>
        <br>
        <a href="reiniciar_titulo.php">Reiniciar cookie</a>
        <?php
    }else{
        ?>
        <form action="" method="post">
            <p>Ingresar el tipo de noticia que quiere ver:</p>
            <label for=""> Noticia politica</label>
            <input type="radio" value="Noticia politica" name="noticia">
            <label for=""> Notica economica</label>
            <input type="radio" value="Noticia economica" name="noticia">
            <label for="">Notica deportiva</label>
            <input type="radio" value="Noticia deportiva" name="noticia">
            <br>
            <input type="submit" value="enviar" name="enviar">
        </form>
        <?php
    }
    ?>
</body>
</html>
<?php
    if(isset($_POST["enviar"])){
        $titular= $_POST["noticia"];
        setcookie("titular", $titular, time() + (60 * 60 * 24 * 90));
    }
?>