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

        echo "<div class='cabecera col-md-12'><div class='col-md-9'>
        <h3>$nombre</h3></div>
        <div class='col-sm-3 align-left'>
         
          <div class='col-md-7'>
           <form method='post' action='salir.php'>
          <input class='btn-primary col-md-12' type='submit' name='salir' value='Cerrar Sesion'/>
           </form>
           <div class='col-md-12'>
            <form method='post' action='perfilAdmin.php'>
          <input class='btn-primary col-md-12' type='submit' name='perfil' value='Mi Perfil'/>
           </form>
           </div>
          </div>";
        if(!isset($_POST['back']))
                {
                    echo "<div class='col-md-4'>
          <img src='' alt='imagen' width='80' height='80' />
          </div>";
                }
        
	     
         echo" </div>
          </div>";
    }
    catch (Exception $exception)
    {
        echo $exception;
        session_unset();
        header("refresh:2;login.php");
    }
    
    
}
?>