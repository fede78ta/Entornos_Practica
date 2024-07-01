<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="estilo.css">
    <?php
        include("conexion.php");
    ?>
</head>
<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">
                <img src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Logo" width="30" height="24">
            </a>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center nav nav-pills" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.html">Inicio</a>
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
        <h1 class="titulo">Registrarse</h1>
        <form method="post">
            <div class="usuario">
                <label for="">Ingrese el mail</label>
                <br>
                <input type="mail" name="usuario" required>
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
            $b= mysqli_query($conec, "SELECT * FROM usuarios WHERE nombreUsuario='$usuario'");       
            $vali= mysqli_fetch_array($b);
            if(!empty($vali)){
                echo "Ya existe una cuenta con ese mail";
            }else{
            if ($_POST["tipo"] == "C"){
                $tipo= "C";
                $crear = "INSERT INTO `usuarios`(`nombreUsuario`, `claveUsuario`, `tipoUsuario`, `categoriaCliente`, `usoPromo`) VALUES ('$usuario','$contraseña','$tipo', 'Inicial', '0')";
            }else{
                $tipo= "D";
                $crear = "INSERT INTO `usuarios`(`nombreUsuario`, `claveUsuario`, `tipoUsuario`, `usoPromo`) VALUES ('$usuario','$contraseña','$tipo', '0')";
            }
            $r= mysqli_query($conec, $crear);
            echo "La cuenta se ha creado";
        }
        }       

    ?>

<footer class="bg-light text-dark pt-5 pb-4">
        <div class="container text-center text-md-start">
            <div class="row text-center  text-md-start"> 
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-primary">Nosotros</h5>
                    <hr class="mb-4">
                    <p>
                        dsffsddfsfsdsdfsdffsd
                    </p>
                </div>
                
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-primary">Links</h5>
                    <hr class="mb-4">
                    <p>
                        <a href="index.html">Inicio</a>
                    </p>
                    <p>
                        <a href="locales.php">Locales</a>
                    </p>
                    <p>
                        <a href="contacto.php">Contacto</a>
                    </p>
                    <p>
                        <a href="info.html">Sobre nosotros</a>
                    </p>
                </div>

                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-primary">Contacto</h5>
                    <hr class="mb-4">
                    <p>
                        <li class="bi bi-house me-3"> Rosario, Zeballos 1320</li>
                    </p>
                    <p>
                        <li class="bi bi-envelope me-3"> fede.t.154@gmail.com</li>
                    </p>
                    <p>
                        <li class="bi bi-telephone me-3"> +5555555</li>
                    </p>

                </div>
                
                <hr class="mb-4">

                <div class="text-center mb-2">
                    <p>Copyright Todos los derechos reservados</p>
                </div>
                
                <div class="text-center">
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item">
                            <a href="#" class="text-dark"><i class="bi bi-instagram"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="text-dark"><i class="bi bi-facebook"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="text-dark"><i class="bi bi-twitter-x"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="text-dark"><i class="bi bi-whatsapp"></i></a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>