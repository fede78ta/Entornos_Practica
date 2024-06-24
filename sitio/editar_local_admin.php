<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="">
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
            
            <ul class="nav nav-pills justify-content-end">
                <li class="nav-item">
                    <a class="btn btn-primary" href="sesion.php" role="button">Mi perfil</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-outline-primary" href="cerrar_sesion.php" role="button">Cerrar sesion</a>
                </li>
            </ul>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <div class="collapse navbar-collapse justify-content-center nav nav-pills" id="navbarNav">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="locales_admin.php">Locales</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacto.php">Novedades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="info.html">Reportes</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?php
    $codigo = $_GET["id"];
    $r=mysqli_query($conec, "select * from locales where codigo='$codigo' ");

    $f=mysqli_fetch_assoc($r);
    $nombre= $f["nombre"];
    $ubicacion=$f["ubicacion"];
    $rubro=$f["rubro"];
    ?>

    <h1>Editar local local</h1>
    <form action="" method="post">
        <label for="">Nombre local</label>
        <input type="text" name="nombre" value="<?php echo $nombre ?>">
        <label for="">Ubicacion</label>
        <input type="text" name="ubicacion" value="<?php echo $ubicacion ?>">
        <label for="">Rubro</label>
        <input type="text" name="rubro" value="<?php echo $rubro ?>">
        <input type="hidden" name="codigo" value="<?php echo $codigo ?>">
        <input type="submit" name="editar" id="" class="btn btn-primary" value="Editar">
    </form>
    <?php

    if(isset($_POST["editar"])){
    $nombre= $_POST["nombre"];
    $ubicacion= $_POST["ubicacion"];
    $rubro= $_POST["rubro"];
    $codigo= $_POST["codigo"];

    $editar = "UPDATE `locales` SET `nombre`='$nombre',`ubicacion`='$ubicacion',`rubro`='$rubro' WHERE codigo='$codigo' ";
    $r= mysqli_query($conec, $editar);
    header("location: locales_admin.php");
    }       

    ?>

    <footer class="bg-light text-dark pt-5 pb-4">
        <div class="container text-center text-md-start">
            <div class="row text-center  text-md-start">  
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-primary">Links</h5>
                    <hr class="mb-4">
                    <p>
                        <a href="">Inicio</a>
                    </p>
                    <p>
                        <a href="">Locales</a>
                    </p>
                    <p>
                        <a href="">Contacto</a>
                    </p>
                    <p>
                        <a href="">Sobre nosotros</a>
                    </p>
                </div>
                
                <hr class="mb-4">

                <div class="text-center mb-2">
                    <p>Copyright Todos los derechos reservados</p>
                </div>
                
                <div class="text-center">
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item">
                            <a href="#" class="text-dark"><i class=""></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="text-dark"><i class=""></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>