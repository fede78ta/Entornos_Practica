<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <?php
        $conec=mysqli_connect("localhost","root","","sitio");
    ?>
</head>
<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="inicio.html">
                <img src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Logo" width="30" height="24">
            </a>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <div class="collapse navbar-collapse justify-content-center nav nav-pills" id="navbarNav">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="inicio.html">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="locales.php">Nuestros locales</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacto.php">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="info.html">Sobre nosotros</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="formulario">
        <h1>Registrarse</h1>
        <form method="post">
            <div class="usuario">
                <label for="">Nombre de usuario o mail</label>
                <br>
                <input type="text" name="usuario" require>
            </div>
            <div class="contraseña">
                <label for="">Contraseña</label>
                <br>
                <input type="text" name="contraseña" required>
            </div>
            <label for="">Tipo de cuenta</label>
            <br>
            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                <input type="radio" class="btn-check" name="tipo" id="btnradio1" autocomplete="off" checked value="C">
                <label class="btn btn-outline-primary" for="btnradio1">Cliente</label>
                <input type="radio" class="btn-check" name="tipo" id="btnradio3" autocomplete="off" value="D"> 
                <label class="btn btn-outline-primary" for="btnradio3">Dueño</label>
            </div>
            <br>
            <br>
            <input type="submit" name="crear" id="" class="btn btn-primary" value="Crear cuenta">
        </form>
    </div>

    <?php

        if(isset($_POST["crear"])){
            $usuario= $_POST["usuario"];
            $contraseña= $_POST["contraseña"];
            if ($_POST["tipo"] == "C"){
                $tipo= "C";
            }else{
                $tipo= "D";
            }
            $crear = "INSERT INTO `usuarios`(`username`, `contraseña`, `tipo`) VALUES ('$usuario','$contraseña','$tipo')";
            $r= mysqli_query($conec, $crear);
        }       

    ?>


</body>
</html>