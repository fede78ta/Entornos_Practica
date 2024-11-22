<?php 
    include("conexion.php");
    $codLocal= $_GET["id"];
    $codigo= $_POST["codigo"];
    $borrar = "DELETE FROM `promociones` WHERE codPromo='$codigo' ";
    $r= mysqli_query($conec, $borrar);
    header('location: promociones_dueño.php?id='.$codLocal.'&pagina=1&eliminar=si');
    
?>