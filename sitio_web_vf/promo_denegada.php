<?php 
    include("conexion.php");
    $codigo= $_POST["codigo"];
    $denegar = "UPDATE `promociones` SET estadoPromo='Denegada' WHERE codPromo='$codigo' ";
    $r= mysqli_query($conec, $denegar);
    header("location: promociones_admin.php");
    
?>