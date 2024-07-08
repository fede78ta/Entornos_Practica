<?php

$header= "FROM: .$_POST[mail].";
$mensaje="Consulta de $_POST[nombre] $_POST[apellido] 

        $_POST[consulta].";



$mail = mail('fede.t.154@gmail.com','Consulta',$mensaje,$header);

header("location: contacto.php");

?>