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
                    <a class="btn btn-primary" href="sesion.php" role="button">Iniciar sesion</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-outline-primary" href="registrarse.php" role="button">Registrarse</a>
                </li>
            </ul>
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
                        <a class="nav-link active" href="#">Nuestros locales</a>
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

    <h1>Nuestros locales</h1>
    <p>Seleccione el local el cual quiere ver las promociones</p>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Codigo</th>
                <th scope="col">Nombre</th>
                <th scope="col">Ubicacion</th>
                <th scope="col">Rubro</th>
            </tr>
        </thead>
        <?php

            $listado= "SELECT * FROM locales";
            $r= mysqli_query($conec,$listado); 

            while($mostrar=mysqli_fetch_array($r)){

        ?>

        <tr>
            <td><?php echo $mostrar["codigo"] ?></td>
            <td><?php echo $mostrar["nombre"] ?></td>
            <td><?php echo $mostrar["ubicacion"] ?></td>
            <td><?php echo $mostrar["rubro"] ?></td>
            <td><?php echo '<a class="btn btn-primary" role="button" href="promociones_locales.php?id='.$mostrar["codigo"].'" name="seleccionar">Seleccionar</a>';?></td>
        </tr>        

        <?php
            }
        ?>
    </table>

    <footer class="bg-light">

    </footer>
</body>
</html>