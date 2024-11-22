<?php
    session_start();
    include("conexion.php");
    $codigo= $_GET["id"];
    $borrar = "DELETE FROM `usuarios` WHERE codUsuario='$codigo' ";
    $r= mysqli_query($conec, $borrar);
    $opc= $_GET["opc"];
    
    if($opc==1){
        header("location: index.html");
    }else{
        header("location: validar_cuenta_admin.php?eliminar=si");
    }
    
?>