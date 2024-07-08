<?php

    include("conexion.php");
    $nombre= $_POST["nombre"];
    $ubicacion= $_POST["ubicacion"];
    $rubro= $_POST["rubro"];
    $codDueño= $_POST["codDueño"];

    $crear = "INSERT INTO `locales`(`nombreLocal`, `ubicacionLocal`, `rubroLocal`, codUsuario, cantidadUso) VALUES ('$nombre','$ubicacion','$rubro','$codDueño', '0')";
    $r= mysqli_query($conec, $crear);
    header("location: locales_admin.php");
           

?>