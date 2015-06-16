<?php
if(!isset($_SESSION['usuario']) && !isset($_SESSION['password'])&&!isset($_SESSION['nombre'])&&!isset($_SESSION['tipoUsuario']))
{
	$activo=60;
    if(isset($_SESSION['tiempo']))
    {
        $vidasesion=time()-$_SESSION['tiempo'];
        if($vidasesion>$activo){
            session_unset();
            header("Location: login.php");
        }
    }
    $_SESSION['tiempo']=time();
}
?>