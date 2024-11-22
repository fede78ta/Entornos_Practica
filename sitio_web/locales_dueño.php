<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locales</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="estilo2.css">
    <?php
        include("conexion.php");
    ?>
</head>
<body class="color">
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="inicio_dueño.html">
                <img src="logo.png" alt="Logo" width="50" height="44">
            </a>
            
            <ul class="nav nav-pills justify-content-end">
                <li class="nav-item">
                    <a class="btn btn-primary boton_sup" href="perfil_dueño.php" role="button">Mi perfil</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-outline-primary boton_sup" href="cerrar_sesion.php" role="button">Cerrar sesion</a>
                </li>
            </ul>
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
                        <a class="nav-link" aria-current="page" href="inicio_dueño.html">Inicio</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="locales_dueño.php">Promociones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacto_dueño.php">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <h1 class="titulo">Mis locales</h1>
    <?php
    $codUsuario= $_SESSION["codUsuario"];
    $l=mysqli_query($conec, "select * from locales where codUsuario='$codUsuario' ");
    $locales=mysqli_fetch_assoc($l);
    if(!empty($locales)){
        ?>
        <div class="table-responsive">
        <table class="table container">
            <thead>
                <tr>
                    <th scope="col">Codigo</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Ubicacion</th>
                    <th scope="col">Rubro</th>
                    <th scope="col">Accion</th>
                </tr>
            </thead>
        <?php

            $listado= "SELECT * FROM locales where codUsuario='$codUsuario' ";
            $r= mysqli_query($conec,$listado); 
 

            while($mostrar=mysqli_fetch_array($r)){

        ?>

            <tr>
                <td><?php echo $mostrar["codLocal"] ?></td>
                <td><?php echo $mostrar["nombreLocal"] ?></td>
                <td><?php echo $mostrar["ubicacionLocal"] ?></td>
                <td><?php echo $mostrar["rubroLocal"] ?></td>
                <td><?php echo '<a class="btn btn-primary" role="button" href="promociones_dueño.php?id='.$mostrar["codLocal"].'&pagina=1" name="seleccionar">Seleccionar</a>';?></td>
            </tr>        

        <?php
            }
        ?>
        </table>
    </div>
    <?php    
    }else{
        ?>
        <div class="alert alert-info formulario" role="alert">
            No tienes un locales asignados.
        </div>
        <?php
        
    }
    
    ?>
    <br>
    <footer class="bg-light text-dark pt-5 pb-4">
        <div class="container text-center text-md-start">
            <div class="row text-center  text-md-start"> 
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-primary">Nosotros</h5>
                    <hr class="mb-4">
                    <p>
                        Somos shopping el Monumento. Creamos esta pagina con el obejtivo de que nuestros clientes disfruten de descuentos increibles.
                    </p>
                </div>
                
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-primary">Links</h5>
                    <hr class="mb-4">
                    <p>
                        <a href="inicio_dueño.html">Inicio</a>
                    </p>
                    <p>
                        <a href="locales_dueño.php">Promociones</a>
                    </p>
                    <p>
                        <a href="contacto_dueño.php">Contacto</a>
                    </p>
                    <p>
                        <a href="mapa_dueño.html">Mapa de sitio</a>
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