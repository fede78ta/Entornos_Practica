<?php 
    include("conexion.php");
    $codigo= $_POST["codigo"];
    $borrar = "DELETE FROM `novedades` WHERE codNovedad='$codigo' ";
    $r= mysqli_query($conec, $borrar);
    header("location: novedades_admin.php?pagina=1&eliminar=si");
    
?>