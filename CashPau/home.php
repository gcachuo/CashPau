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
                else if(isset($_POST['back']))
                {
                    require('homeAdmin.php');
                }   
                else
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
