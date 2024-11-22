<?php 
    include("conexion.php");
    $codigo= $_POST["codigo"];
    $borrar = "DELETE FROM `locales` WHERE codLocal='$codigo' ";
    $r= mysqli_query($conec, $borrar);
    header("location: locales_admin.php?pagina=1&eliminar=si");
    
?>