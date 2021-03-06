<?php 
session_start();
require("tiempo.php");
require("nusoap/lib/nusoap.php");
$clienteSoap=new soapClient("http://www.webservicex.net/country.asmx?WSDL");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Home</title>
</head>
<body>
    <?php
    if(isset($_SESSION['tipoUsuario']))
    {		
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
            else if(isset($_POST['actuser']))
            {
                $user=$_POST['usuario'];
                $tipo=$_POST['tipoUsuario'];
                $id=$_POST['idServicio'];
                $numero=$_POST['numeroCliente'];
                try
                {
                    include("managerBD.php");
                    echo $consulta="call updateusuarios ('$user','$tipo')";
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
                try
                {
                    include("managerBD.php");
                    echo $consulta="call updateservicioscliente ('$numero','$user','$id')";
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
                require('adminUsers.php');
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
                    $consulta="call insertservicioscliente ('$numeroCliente','$usuario','$idServicio','$fecha','$nombre')";
                    $ejecutarConsulta =  mysql_query($consulta);
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
                require("homeAdmin.php");
            }
            if(isset($_POST['registrarusuario']))
            {
                if($_POST['password']==$_POST['repassword'])
                {
                    $fechaNacimiento=$_POST['fechaNacimiento'];
                    $usuario=$_POST['u'];
                    $nombre=$_POST['nombre'];
                    $apePaterno=$_POST['apePaterno'];
                    $apeMaterno=$_POST['apeMaterno'];
                    $password=$_POST['p'];
                    $diaNacimiento=idate('d', strtotime($fechaNacimiento));
                    $mesNacimiento=idate('m', strtotime($fechaNacimiento));
                    $aņoNacimiento=idate('Y', strtotime($fechaNacimiento));
                    $correo=$_POST['correo'];
                    $tipo='u';
                    $fechaRegistro=date('d-m-Y', time());
                    $origenRegistro='a';
                    try
                    {
                        include("managerBD.php");
                        echo $consulta="call insertusuarios ('$usuario','$nombre','$apePaterno','$apeMaterno','$password','$diaNacimiento','$mesNacimiento','$aņoNacimiento','$fechaRegistro','$correo','$tipo','$origenRegistro')";
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
                    echo $_SESSION['insertusuarios'];
                    require('registrarUser.php');
                }
                else
                {
                    echo'<h2>Las contraseņas no coinciden</h2>';
                    require('registrarUser.php');
                }
            }
            else if(isset($_POST['adminuser']))
            {
                require('adminUsers.php');
            }
            
            else if(isset($_POST['back']))
            {
                require('homeAdmin.php');                    
            }  
            else if(!isset($_POST['reguser'])&&!isset($_POST['miserv'])&&!isset($_POST['insertservicio'])&&!isset($_POST['actuser']))
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
                require("homeUser.php");
            }
            else if(isset($_POST['pagar']))
            {
                $usuario=$_SESSION['usuario'];
                $monto=$_POST['monto'];
                $idServicio=$_POST['idServicio'];
                $fecha=date('d-m-Y', time()); 
                try
                {
                    include("managerBD.php");
                    echo $consulta="call insertmovimientos ('$usuario','$monto','$idServicio','$fecha')";
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
                require("homeUser.php");
            }
            else if(isset($_POST['pagarserv']))
            {
                require("homeUser.php");
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
        else if($_SESSION['tipoUsuario']=="w")
        {
            if(isset($_POST['registrarusuario']))
            {
                if($_POST['p']==$_POST['repassword'])
                {
                    $fechaNacimiento=$_POST['fechaNacimiento'];
                    $usuario=$_POST['u'];
                    $nombre=$_POST['nombre'];
                    $apePaterno=$_POST['apePaterno'];
                    $apeMaterno=$_POST['apeMaterno'];
                    $password=$_POST['p'];
                    $diaNacimiento=idate('d', strtotime($fechaNacimiento));
                    $mesNacimiento=idate('m', strtotime($fechaNacimiento));
                    $aņoNacimiento=idate('Y', strtotime($fechaNacimiento));
                    $correo=$_POST['correo'];
                    $tipo='u';
                    $fechaRegistro=date('d-m-Y', time());
                    $origenRegistro='w';
                    try
                    {
                        include("managerBD.php");
                        echo $consulta="call insertusuarios ('$usuario','$nombre','$apePaterno','$apeMaterno','$password','$diaNacimiento','$mesNacimiento','$aņoNacimiento','$fechaRegistro','$correo','$tipo','$origenRegistro')";
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
                    echo'w';
                }
                else
                {
                    echo'<h2>Las contraseņas no coinciden</h2>';
                    header("Location:login.php");
                }
                echo'password';
            }
            session_unset();
            header("Location:login.php");
            echo'unset';
        }
        else
        {
            echo 'No ha iniciado Sesion (1)';
            session_unset();
            header("refresh:2;login.php");
        }
    }
    else
    {
        echo 'No ha iniciado Sesion (2)';
        session_unset();
        header("refresh:2;login.php");
    }    
    ?>
</body>
</html>
