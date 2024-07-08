<?php
    include("conexion.php");
    $textoNovedad= $_POST["textoNovedad"];
    $fechaDesdeNovedad= $_POST["fechaDesdeNovedad"];
    $fechaHastaNovedad= $_POST["fechaHastaNovedad"];
    $tipoUsuario= $_POST["categoriaCliente"];
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

    $crear = "INSERT INTO `novedades`(`textoNovedad`, `fechaDesdeNovedad`, `fechaHastaNovedad`, `categoriaCliente`) VALUES ('$textoNovedad','$fechaDesdeNovedad','$fechaHastaNovedad','$categoriaCliente')";
    $r= mysqli_query($conec, $crear);
    header("location: novedades_admin.php");
?>

 