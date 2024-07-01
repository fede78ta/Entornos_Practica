<?php
session_start();
include("conexion.php");
            $usuario= $_POST["usuario"];
            $contraseña= $_POST["contraseña"];
            $r= mysqli_query($conec, "SELECT * FROM usuarios WHERE nombreUsuario='$usuario' AND claveUsuario='$contraseña'  ");       
            $q= mysqli_fetch_array($r);
            if(!empty($q)){
                $_SESSION["nombreUsuario"]= $q["nombreUsuario"];
                $_SESSION["claveUsuario"]= $q["claveUsuario"];
                $_SESSION["tipoUsuario"]= $q["tipoUsuario"];
                $_SESSION["codUsuario"]= $q["codUsuario"];
                $_SESSION["categoriaCliente"]=$q["categoriaCliente"];
                switch($_SESSION["tipoUsuario"]){
                    case "A":
                        $pagina= "inicio_admin.html"; 
                            header("location: $pagina");
                    break;
                    case "D":
                        $pagina= "inicio_dueño.html";
                            header("location: $pagina");
                    break;
                    case "C":
                        $pagina= "inicio_cliente.html";
                            header("location: $pagina");
                    break;
                }
            }else{
                header("location: sesion.php");
            }

?>