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
                require('homeAdmin.php');
            }
            else if($_SESSION['tipoUsuario']=="u")
            {
                //Usuario
                require('homeUser.php');
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
