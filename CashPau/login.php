    <?php

session_start();
if(isset($_SESSION['usuario']) && isset($_SESSION['password']))
{
    header("Location:home.php");	
}
$mensaje= "";
if (isset($_POST['usuario'])&&isset($_POST['password']))
{
    $usuario=$_POST['usuario'];
    $password=$_POST['password'];
    
    //aquí vamos a verificar en la base de datos
    include("managerBD.php");
    $consulta="select * from usuarios where usuario='$usuario' and password='$password'";
    $ejecutarConsulta =  mysql_query($consulta);
    include("cerrarConexion.php"); 
    
}
else
    $mensaje="No ha capturado un valor en el formulario";

?>
<html>
<head>
    <title>Login</title>
    <link href="css/site.css" rel="stylesheet" />
    <link href="css/bootstrap.css" rel="stylesheet" />
</head>
<body>
    <form name="login" method="post" action="login.php">
        <?php 
        if (!isset($_SESSION['usuario'])&&!isset($_SESSION['password']))
        {
            echo'<div class="row">';
            echo'<div class="col-md-4"></div>';
            // echo'<div class="col-md-4">';
            // echo'<img src="" alt="imagen" width="150" height="150"/>';
            // echo'</div>';
            echo '<div class="col-md-4">';
            echo '<label class="col-md-6">Usuario:</label> <input type="text" name ="usuario" class="col-md-6"/>
				<br/>
				<br/>
				<label class="col-md-6">Contraseña:</label> <input type="password" name="password" class="col-md-6"/>
				';
            if (isset($_POST['usuario'])&&isset($_POST['password']))
            {
                if($_POST['usuario']!=""&&($_POST['password']!=""))
                {
                if (mysql_num_rows($ejecutarConsulta)!=0)
                { 
                    try
                    {
                    	$campos=mysql_fetch_array($ejecutarConsulta);
                        $_SESSION['usuario']=$usuario;
                        $_SESSION['password']=$password;
                        $_SESSION['nombre']=$campos['nombre'];
                        $_SESSION['tipoUsuario']=$campos['tipoUsuario'];
                        header("Location:home.php");
                    }
                    catch (Exception $exception)
                    {
                        echo $exception;
                        session_unset();
                        header("refresh:2;login.php");
                    }                  
                    
                }
                else
                    echo "<center><br/>Error a validar sus credenciales, vuelve a intentarlo</center>";
                }
                 else
                echo"<br/><center>No ha capturado valores en el formulario</center>";
            }
           
            echo '<div class=col-md-4"></div>       
				<div class=col-md-6">         
				<input type="button" value="Registrarse" name="registrar" class="btn-info"/>
                <input type="submit" value="Iniciar Sesión" name="ok" class="btn-primary"/>
				</div>';
            echo'</div>';
            echo'</div>';
        }			
        ?>
    </form>
    <?php
    
    ?>

</body>
</html>
