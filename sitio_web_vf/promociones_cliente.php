<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilo.css">
    <?php
        include("conexion.php");
    ?>
</head>
<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="inicio_cliente.html">
                <img src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Logo" width="30" height="24">
            </a>
            
            <ul class="nav nav-pills justify-content-end">
                <li class="nav-item">
                    <a class="btn btn-primary boton_sup" href="perfil_cliente.php" role="button">Mi perfil</a>
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
                        <a class="nav-link" aria-current="page" href="inicio_cliente.html">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="locales_cliente.php">Locales</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="novedades_cliente.php">Novedades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacto_cliente.php">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="info_cliente.html">Sobre nosotros</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    
    
        <?php
            $codigo = $_GET["id"];
            $r=mysqli_query($conec, "select * from locales where codLocal='$codigo' ");
            $l=mysqli_fetch_assoc($r);
            $nombre= $l["nombreLocal"];
            switch($_SESSION["categoriaCliente"]){
                case "Inicial":
                    $r=mysqli_query($conec, "select * from promociones where codLocal='$codigo' and categoriaCliente='Inicial' and estadoPromo='Aceptada'");
                break;
                case "Medium":
                    $r=mysqli_query($conec, "select * from promociones where codLocal='$codigo' and categoriaCliente='Inicial' or categoriaCliente='Medium' and estadoPromo='Aceptada'");
                break;
                case "Premium":
                    $r=mysqli_query($conec, "select * from promociones where codLocal='$codigo' and estadoPromo='Aceptada' ");
                break;
            }

        ?>
    <h1 class="titulo"><?php echo "Promociones de $nombre"?> </h1>


        <?php
        while($mostrar=mysqli_fetch_array($r)){
        ?>  
                <div class="card text-center cuadro">
                    <div class="card-header">
                        <?php echo "Codigo Promocion: $mostrar[codPromo]" ?>
                    </div>
                    <div class="card-body">
                        <h7 class="card-title"><?php echo "Categoria cliente: $mostrar[categoriaCliente]" ?></h5>
                        <p class="card-text"><?php echo $mostrar["textoPromo"] ?></p>
                        <p>
                            Dias disponible:
                            <ul class="list-group list-group-horizontal list-group-horizontal-sm justify-content-center">
                            <?php
                            if($mostrar["diaL"]=="SI"){
                                echo "<li class='list-group-item active'>L</li>";
                            }else{
                                echo "<li class='list-group-item'>L</li>";
                            }
                            if($mostrar["diaM"]=="SI"){
                                echo "<li class='list-group-item active'>M</li>";
                            }else{
                                echo "<li class='list-group-item'>M</li>";
                            }
                            if($mostrar["diaX"]=="SI"){
                                echo "<li class='list-group-item active'>X</li>";
                            }else{
                                echo "<li class='list-group-item'>X</li>";
                            }
                            if($mostrar["diaJ"]=="SI"){
                                echo "<li class='list-group-item active'>J</li>";
                            }else{
                                echo "<li class='list-group-item'>J</li>";
                            }
                            if($mostrar["diaV"]=="SI"){
                                echo "<li class='list-group-item active'>V</li>";
                            }else{
                                echo "<li class='list-group-item'>V</li>";
                            }
                            if($mostrar["diaS"]=="SI"){
                                echo "<li class='list-group-item active'>S</li>";
                            }else{
                                echo "<li class='list-group-item'>S</li>";
                            }
                            if($mostrar["diaD"]=="SI"){
                                echo "<li class='list-group-item active'>D</li>";
                            }else{
                                echo "<li class='list-group-item'>D</li>";
                            }
                            ?>

                            </ul>
                        </p>
                        <p class="card-text"><?php echo '<a class="btn btn-primary" role="button" href="promo_canjeada.php?id='.$mostrar["codPromo"].'" name="seleccionar">Seleccionar</a>';?></p>
                    </div>
                        <div class="card-footer text-body-secondary">
                            <?php echo "Desde: $mostrar[fechaDesdePromo] Hasta: $mostrar[fechaHastaPromo]"?>
                        </div>
                </div>
                <br>
  
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
                        dsffsddfsfsdsdfsdffsd
                    </p>
                </div>
                
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-primary">Links</h5>
                    <hr class="mb-4">
                    <p>
                        <a href="inicio_cliente.html">Inicio</a>
                    </p>
                    <p>
                        <a href="locales_cliente.php">Locales</a>
                    </p>
                    <p>
                        <a href="novedades_cliente.php">Novedades</a>
                    </p>
                    <p>
                        <a href="contacto_cliente.php">Contacto</a>
                    </p>
                    <p>
                        <a href="info_cliente.html">Sobre nosotros</a>
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