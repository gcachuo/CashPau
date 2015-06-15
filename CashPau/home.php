<?php 
require("salir.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Home</title>
</head>
<body>
    <?php
    require("tiempo.php");
    try
    {
        if(isset($_SESSION['tipoUsuario']))
        {
            require("sesion.php");		
            if($_SESSION['tipoUsuario']=="a")
            {
                //Administrador
                
                if(isset($_POST['reguser']))
                {
                    
                    require('registrarUser.php');
                }
                else if(isset($_POST['miserv']))
                {
                    require('misServicios.php');
                }
                if(isset($_POST['registrarusuario']))
                {
                    if($_POST['password']==$_POST['repassword'])
                    {
                        $fechaNacimiento=$_POST['fechaNacimiento'];
                        $usuario=$_POST['usuario'];
                        $nombre=$_POST['nombre'];
                        $apePaterno=$_POST['apePaterno'];
                        $apeMaterno=$_POST['apeMaterno'];
                        $password=$_POST['password'];
                        $diaNacimiento=idate('d', strtotime($fechaNacimiento));
                        $mesNacimiento=idate('m', strtotime($fechaNacimiento));
                        $añoNacimiento=idate('Y', strtotime($fechaNacimiento));
                        $correo=$_POST['correo'];
                        $tipo='u';
                        $fechaRegistro=date('d-m-Y', time());
                        $origenRegistro='a';
                        try
                        {
                            include("managerBD.php");
                            echo $consulta="call insertusuarios ('$usuario','$nombre','$apePaterno','$apeMaterno','$password','$diaNacimiento','$mesNacimiento','$añoNacimiento','$fechaRegistro','$correo','$tipo','$origenRegistro')";
                            echo $ejecutarConsulta =  mysql_query($consulta);
                            if($ejecutarConsulta)
                                echo 'correcto';
                            else
                                echo'incorrecto';
                            include("cerrarConexion.php"); 
                        }
                        catch (Exception $exception)
                        {
                            echo $exception;
                        }
                        
                        
                        
                        // require('homeAdmin.php');
                        echo $_SESSION['insertusuarios'];
                        require('registrarUser.php');
                    }
                    else
                    {
                        echo'<h2>Las contraseñas no coinciden</h2>';
                        require('registrarUser.php');
                    }
                }
                else if(isset($_POST['adminuser']))
                {
                    require('adminUsers.php');
                }
                else if(isset($_POST['actuser']))
                {
                    $usuario=$_POST['usuario'];
                    $tipo=$_POST['tipoUsuario'];
                    $idServicio=$_POST['idServicio'];
                    $numeroCliente=$_POST['numeroCliente'];
                     try
                        {
                            include("managerBD.php");
                            echo $consulta="call updateusuarios ('$usuario','$tipo')";
                            echo $ejecutarConsulta =  mysql_query($consulta);
                            if($ejecutarConsulta)
                                echo 'correcto';
                            else
                                echo'incorrecto';
                        }
                        catch (Exception $exception)
                        {
                            echo $exception;
                        }
                     try
                        {
                            include("managerBD.php");
                            echo $consulta="call updateusuarios ('$numeroCliente','$usuario','$idServicio')";
                            echo $ejecutarConsulta =  mysql_query($consulta);
                            if($ejecutarConsulta)
                                echo 'correcto';
                            else
                                echo'incorrecto';
                            include("cerrarConexion.php"); 
                        }
                        catch (Exception $exception)
                        {
                            echo $exception;
                        }
                    //require('adminUsers.php');
                }
                else if(isset($_POST['back']))
                {
                    require('homeAdmin.php');                    
                }  
                else if(!isset($_POST['reguser']))
                {
                    require('homeAdmin.php');
                }
                
            }
            else if($_SESSION['tipoUsuario']=="u")
            {                
                //Usuario
                if(isset($_POST['miserv']))
                {
                    require('misServicios.php');
                }
                else if(isset($_POST['insertservicio']))
                {
                    $numeroCliente=$_POST['numeroCliente'];
                    $usuario=$_SESSION['usuario'];
                    $idServicio=$_POST['idServicio'];
                    $nombre=$_POST['nombre'];
                    $fecha=date('d-m-Y', time()); 
                    try
                    {
                        include("managerBD.php");
                        echo $consulta="call insertservicioscliente ('$numeroCliente','$usuario','$idServicio','$fecha','$nombre')";
                        echo $ejecutarConsulta =  mysql_query($consulta);
                        if($ejecutarConsulta)
                            echo 'correcto';
                        else
                            echo'incorrecto';
                        include("cerrarConexion.php"); 
                    }
                    catch (Exception $exception)
                    {
                        echo $exception;
                    }
                    require("misServicios.php");
                }
                
                else if(isset($_POST['pagarserv']))
                {
                    require('pagarServicio.php');
                }
                else if(isset($_POST['contacto']))
                {
                    require('contacto.php');
                }
                else if(isset($_POST['back']))
                {
                    require('homeUser.php');
                }
                else
                {
                    require('homeUser.php');
                }
                
            }
        }
        else
        {
            echo 'No ha iniciado Sesion';
            session_unset();
            header("refresh:2;login.php");
        }
    }
    catch (Exception $exception)
    {
        echo $exception;
        session_unset();
        header("refresh:2;login.php");
    }     
    
    ?>

</body>
</html>
