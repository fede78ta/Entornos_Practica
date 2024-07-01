<?php 
    include("conexion.php");
    $codigo= $_POST["codigo"];
    $borrar = "DELETE FROM `promociones` WHERE codPromo='$codigo' ";
    $r= mysqli_query($conec, $borrar);
    header("location: promociones_dueño.php");
    
?>