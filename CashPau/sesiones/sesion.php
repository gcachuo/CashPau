<link href="css/bootstrap-theme.css" rel="css/stylesheet" />
<link href="css/bootstrap.css" rel="css/stylesheet" />
<link href="css/site.css" rel="css/stylesheet" />
<?php
if(!isset($_SESSION['usuario']) && !isset($_SESSION['password']))
		{
			
			echo "No has iniciado session";
			header("refresh:3;login.php");
			
		}
		else
		{
		require("CaducarSesion.php");
			$nombre = $_SESSION['usuario'];
			$pass = $_SESSION['password'];
			echo "Nombre: $nombre Password: $pass";
		}
		?>