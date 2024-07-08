<?php
    include("conexion.php");
    $texto= $_POST["texto"];
    $fechadesde= $_POST["fechadesde"];
    $fechahasta= $_POST["fechahasta"];
    $categoria= $_POST["categoriaCliente"];
    $codigo= $_POST["codigo"];
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
    $editar = "UPDATE `novedades` SET `textoNovedad`='$texto',`fechaDesdeNovedad`='$fechadesde', `fechaHastaNovedad`='$fechahasta',`categoriaCliente`='$categoriaCliente' WHERE codNovedad='$codigo' ";
    $r= mysqli_query($conec, $editar);
    header("location: novedades_admin.php");
?>