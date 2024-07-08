<?php
include("conexion.php");
$usuario= $_POST["usuario"];
$contraseña= $_POST["contraseña"];
$b= mysqli_query($conec, "SELECT * FROM usuarios WHERE nombreUsuario='$usuario'");       
$vali= mysqli_fetch_array($b);
if(!empty($vali)){
    
    header("location: registrarse.php?id=incorrecto ");
}else{
    if ($_POST["tipo"] == "C"){
        $tipo= "C";
        $crear = "INSERT INTO `usuarios`(`nombreUsuario`, `claveUsuario`, `tipoUsuario`, `categoriaCliente`, `usoPromo`, activa) VALUES ('$usuario','$contraseña','$tipo', 'Inicial', '0', 'NO')";
        $r= mysqli_query($conec, $crear);
        
        $subject= "Gracias por registrarte";
        $mensaje= "Datos de tu cuenta:
                    Mail: $usuario
                    Contraseña: $contraseña
                    
                    Entre en el siguiente link para validar su cuenta:
                    https://yellow-ram-487875.hostingersite.com/activar_cliente.php?mail=$usuario
            
            ";
        mail($usuario,$subject,$mensaje);
        header("location: registrarse.php?id=correcto_c ");
        
    }else{
        $tipo= "D";
        $crear = "INSERT INTO `usuarios`(`nombreUsuario`, `claveUsuario`, `tipoUsuario`, `usoPromo`, activa) VALUES ('$usuario','$contraseña','$tipo', '0', 'NO')";
        $r= mysqli_query($conec, $crear);
        header("location: registrarse.php?id=correcto_d ");
    }

}
?>      