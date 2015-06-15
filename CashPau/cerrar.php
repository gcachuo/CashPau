<?php
if(!isset($_SESSION['tipoUsuario']))
{
    
session_unset();
header("Location: login.php");
}
?>
