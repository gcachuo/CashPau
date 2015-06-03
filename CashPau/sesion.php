<link href="css/bootstrap-theme.css" rel="stylesheet" />
<link href="css/bootstrap.css" rel="stylesheet" />
<link href="css/site.css" rel="stylesheet" />
<?php
if(!isset($_SESSION['usuario']) && !isset($_SESSION['password'])&&!isset($_SESSION['nombre'])&&!isset($_SESSION['tipoUsuario']))
{
    
    echo "<div class='row cabecera'><div class='col-md-10'><h3>No has iniciado Sesion</h3></div><div class='col-sm-2 align-left'>
          </div></div>";
    header("refresh:2;login.php");
    
}
else
{
    try
    {
        require("CaducarSesion.php");
        $nombre = $_SESSION['nombre'];
        $pass = $_SESSION['password'];
        $tipoUsuario=$_SESSION['tipoUsuario'];

        echo "<div class='row cabecera'><div class='col-md-10'><h3>$nombre</h3></div><div class='col-sm-2 align-left'>
          <form method='post' action='salir.php'>
		  <input class='btn-primary' type='submit' name='salir' value='Cerrar Sesion'/>
	      </form></div></div>";
    }
    catch (Exception $exception)
    {
        echo $exception;
        session_unset();
        header("refresh:2;login.php");
    }
    
   
}
?>