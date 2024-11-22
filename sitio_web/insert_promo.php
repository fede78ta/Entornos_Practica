<?php
    session_start();
    include("conexion.php");
    $textoPromo= $_POST["textoPromo"];
    $fechaDesdePromo= $_POST["fechaDesdePromo"];
    $fechaHastaPromo= $_POST["fechaHastaPromo"];
    switch($_POST["categoriaCliente"]){
        case "Inicial":
            $categoriaCliente= $_POST["categoriaCliente"];
        break;
        case "Medium":
            $categoriaCliente= $_POST["categoriaCliente"];
        break;
        case "Premium":
            $categoriaCliente= $_POST["categoriaCliente"];
        break;
    };
    
    $diaL= "NO";
    if(isset($_POST["diaL"])){
        $diaL= "SI";
    }
    $diaM= "NO";
    if(isset($_POST["diaM"])){
        $diaM= "SI";
    }
    $diaX= "NO";
    if(isset($_POST["diaX"])){
        $diaX= "SI";
    }
    $diaJ= "NO";
    if(isset($_POST["diaJ"])){
        $diaJ= "SI";
    }
    $diaV= "NO";
    if(isset($_POST["diaV"])){
        $diaV= "SI";
    }
    $diaS= "NO";
    if(isset($_POST["diaS"])){
        $diaS= "SI";
    }
    $diaD= "NO";
    if(isset($_POST["diaD"])){
        $diaD= "SI";
    }
    
    $codLocal= $_GET["id"];
    $estadoPromo= "Pendiente";
    $codLocal= $_SESSION["codLocal"];

    $crear = "INSERT INTO `promociones`(`textoPromo`, `fechaDesdePromo`, `fechaHastaPromo`, `categoriaCliente`,`estadoPromo`, `codLocal`, `cantidadUso`, `diaL`, `diaM`, `diaX`, `diaJ`, `diaV`, `diaS`, `diaD` ) VALUES ('$textoPromo','$fechaDesdePromo','$fechaHastaPromo','$categoriaCliente','$estadoPromo', '$codLocal', '0', '$diaL', '$diaM', '$diaX', '$diaJ', '$diaV', '$diaS', '$diaD')";
    $r= mysqli_query($conec, $crear);
    header('location: promociones_dueño.php?id='.$codLocal.'&pagina=1&exito=si');
?>