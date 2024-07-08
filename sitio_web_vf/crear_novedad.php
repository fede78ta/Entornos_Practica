<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear novedad</title>
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
                    <li class="nav-item">
                        <a class="nav-link" href="locales_admin.php">Locales</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="novedades_admin.php">Novedades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="promociones_admin.php">Promociones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="reportes_admin.php">Reportes</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <h1 class="titulo">Crear novedad</h1>
    <form action="insert_nove.php" method="post" class="formulario">
        <label for="">Ingresar el texto de la novedad</label>
        <br>
        <textarea name="textoNovedad" id="" cols="30" rows="10"></textarea>
        <br>
        <label for="">Fecha desde</label>
        <br>
        <input type="date" name="fechaDesdeNovedad">
        <br>
        <label for="">Fecha hasta</label>
        <br>
        <input type="date" name="fechaHastaNovedad">
        <br>
        <label for="">Ingresar la categoria de usuario:</label>
        <br>
        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="categoriaCliente" id="btnradio1" autocomplete="off" checked value="Inicial">
            <label class="btn btn-outline-primary" for="btnradio1">Inicial</label>

            <input type="radio" class="btn-check" name="categoriaCliente" id="btnradio2" autocomplete="off" value="Medium">
            <label class="btn btn-outline-primary" for="btnradio2">Medium</label>

            <input type="radio" class="btn-check" name="categoriaCliente" id="btnradio3" autocomplete="off" value="Premium">
            <label class="btn btn-outline-primary" for="btnradio3">Premium</label>
        </div>
        <br>
        <br>
        <input type="submit" name="crear" id="" class="btn btn-primary" value="Crear">
    </form>

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
                        <a href="promociones_admin.php">Reportes</a>
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