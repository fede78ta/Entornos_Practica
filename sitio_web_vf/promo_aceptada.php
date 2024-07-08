<?php 
    include("conexion.php");
    $codigo= $_POST["codigo"];
    $aceptar = "UPDATE `promociones` SET estadoPromo='Aceptada' WHERE codPromo='$codigo' ";
    $r= mysqli_query($conec, $aceptar);
    header("location: promociones_admin.php");
    
?>