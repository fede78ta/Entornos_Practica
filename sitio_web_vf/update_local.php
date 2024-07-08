<?php
    include("conexion.php");
    $nombre= $_POST["nombre"];
    $ubicacion= $_POST["ubicacion"];
    $rubro= $_POST["rubro"];
    $codDueño= $_POST["codDueño"];
    $codigo= $_POST["codigo"];

    $editar = "UPDATE `locales` SET `nombreLocal`='$nombre',`ubicacionLocal`='$ubicacion',`rubroLocal`='$rubro', codUsuario='$codDueño' WHERE codLocal='$codigo' ";
    $r= mysqli_query($conec, $editar);
    header("location: locales_admin.php");       



?>