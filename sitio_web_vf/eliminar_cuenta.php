<?php
    session_start();
    include("conexion.php");
    $codigo= $_SESSION["codUsuario"];
    $borrar = "DELETE FROM `usuarios` WHERE codUsuario='$codigo' ";
    $r= mysqli_query($conec, $borrar);
    header("location: index.html");
    
?>