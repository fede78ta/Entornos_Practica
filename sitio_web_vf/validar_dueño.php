<?php
    include("conexion.php");
    $codigo= $_GET["id"];

    $editar = "UPDATE `usuarios` SET `activa`='SI' WHERE codUsuario='$codigo' ";
    $r= mysqli_query($conec, $editar);
    header("location: validar_cuenta_admin.php");       



?>