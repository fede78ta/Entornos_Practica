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
            <a class="navbar-brand" href="inicio_admin.html">
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
                        <a class="nav-link" aria-current="page" href="inicio_admin.html">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="locales_admin.php">Locales</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="">Novedades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Reportes</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <h1>Novedades</h1>
    <a class="btn btn-primary" href="crear_novedad.php" role="button">Crear novedad</a>

        <?php

            $listado= "SELECT * FROM novedades";
            $r= mysqli_query($conec,$listado); 

            while($mostrar=mysqli_fetch_array($r)){

        ?>
                <div class="card text-center">
                    <div class="card-header">
                        <?php echo "Codigo Novedad: $mostrar[codNovedad]" ?>
                    </div>
                    <div class="card-body">
                        <p class="card-text"><?php echo $mostrar["textoNovedad"] ?></p>
                        <a href="#" class="btn btn-primary">Editar</a>
                        <a href="#" class="btn btn-primary">Eliminar</a>
                    </div>
                        <div class="card-footer text-body-secondary">
                            <?php echo "Desde: $mostrar[fechaDesdeNovedad] Hasta: $mostrar[fechaHastaNovedad]"?>
                        </div>
                </div>
  
        <?php
            }
        ?>

</body>
</html>