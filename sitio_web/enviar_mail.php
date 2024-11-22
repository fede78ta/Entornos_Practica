<?php

$header= "FROM: .$_POST[mail].";
$tipo= $_POST["tipo"];
$mensaje="Consulta de $_POST[nombre] $_POST[apellido] 

        $_POST[consulta].";



$mail = mail('fede.t.154@gmail.com','Consulta',$mensaje,$header);

if($tipo == "Usuario"){
    header("location: contacto.php?id=correcto");
}elseif($tipo == "Cliente"){
    header("location: contacto_contacto.php?id=correcto");
}elseif($tipo == "Dueño"){
    header("location: contacto_dueño.php?id=correcto");
}
?>