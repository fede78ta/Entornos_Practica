<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novedades</title>
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
            <a class="navbar-brand" href="inicio_admin.html">
                <img src="logo.png" alt="Logo" width="50" height="44">
            </a>
            
            <ul class="nav nav-pills justify-content-end">
                <li class="nav-item">
                    <a class="btn btn-primary boton_sup" href="perfil_admin.php" role="button">Mi perfil</a>
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
                        <a class="nav-link" aria-current="page" href="inicio_admin.html">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="validar_cuenta_admin.php">Validar Dueños</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Gestionar
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="locales_admin.php">Locales</a></li>
                            <li><a class="dropdown-item active" href="novedades_admin.php">Novedades</a></li>
                            <li><a class="dropdown-item" href="promociones_admin.php">Promociones</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="reportes_admin.php">Reportes</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <h1 class="titulo">Novedades</h1>
    <a class="btn btn-primary boton" href="crear_novedad.php" role="button">Crear novedad</a>

        <?php

            $listado= "SELECT * FROM novedades";
            $r= mysqli_query($conec,$listado); 
            
            if(isset($_GET["exito"]) && !empty($_GET["exito"])){
            
            if($_GET["exito"]=="si"){
                echo "<div class='alert alert-success formulario' role='alert'>
                        La novedad se ha creado correctamente.
                    </div>";
            }
            }
            
            if(isset($_GET["edit"]) && !empty($_GET["edit"])){
            
            if($_GET["edit"]=="si"){
                echo "<div class='alert alert-success formulario' role='alert'>
                        La novedad se ha editado correctamente.
                    </div>";
            }
            }
        
            if(isset($_GET["eliminar"]) && !empty($_GET["eliminar"])){
            
            if($_GET["eliminar"]=="si"){
                echo "<div class='alert alert-success formulario' role='alert'>
                        La novedad se ha eliminado correctamente.
                    </div>";
            }
            }        
        
        
            if(!$_GET){
                $_GET['pagina']= 1;
            }
            
            $num_registros= mysqli_num_rows($r);
            $registros= '2';
            $paginas= $num_registros/$registros;
            $paginas= ceil($paginas);
            $inicio= ($_GET['pagina']-1)*$registros;
            $busqueda= mysqli_query($conec, "select * from novedades limit $inicio,$registros ");
            
            while($mostrar=mysqli_fetch_array($busqueda)){

        ?>
                <div class="card text-center cuadro">
                    <div class="card-header">
                        <?php echo "Codigo Novedad: $mostrar[codNovedad]" ?>
                    </div>
                    <div class="card-body">
                        <p class="card-text"><?php echo "Categoria de cliente: $mostrar[categoriaCliente]" ?></p>
                        <p class="card-text"><?php echo $mostrar["textoNovedad"] ?></p>
                        <p class="card-text"><?php echo '<a href="editar_novedades.php?id='.$mostrar["codNovedad"].'" class="btn btn-primary">Editar</a>'?></p>
                        
                        <form action="eliminar_novedad.php" method="post">
                            <input type="hidden" name="codigo" value="<?php echo $mostrar['codNovedad']?>">
                            <input type="submit" value="Eliminar" class="btn btn-primary">
                        </form>                  
                    </div>
                        <div class="card-footer text-body-secondary">
                            <?php echo "Desde: $mostrar[fechaDesdeNovedad] Hasta: $mostrar[fechaHastaNovedad]"?>
                        </div>
                </div>
                <br>
        <?php
            }
            mysqli_free_result($r);
            mysqli_close($conec);
        ?>
        
<nav aria-label="...">
  <ul class="pagination justify-content-center">
    <li class="page-item <?php echo $_GET['pagina']<=1 ? 'disabled' : '' ?>">
      <a class="page-link" href="novedades_admin.php?pagina=<?php echo $_GET['pagina']-1 ?>">Anterior</a>
    </li>
    
    <?php for($i=0;$i<$paginas;$i++): ?>
    
    <li class="page-item <?php echo $_GET['pagina']==$i+1 ? 'active' : '' ?>">
        <a class="page-link" href="novedades_admin.php?pagina=<?php echo $i+1 ?>"><?php echo $i+1 ?></a>
    </li>
    
    <?php endfor ?>

    <li class="page-item <?php echo $_GET['pagina']>=$paginas ? 'disabled' : '' ?>">
      <a class="page-link" href="novedades_admin.php?pagina=<?php echo $_GET['pagina']+1 ?>">Siguiente</a>
    </li>
  </ul>
</nav>

        
        
        <br>
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
                        <a href="inicio_admin.html">Inicio</a>
                    </p>
                    <p>
                        <a href="locales_admin.php">Locales</a>
                    </p>
                    <p>
                        <a href="novedades_admin.php">Novedades</a>
                    </p>
                    <p>
                        <a href="promociones_admin.php">Promociones</a>
                    </p>
                    <p>
                        <a href="reportes_admin.php">Reportes</a>
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