<?php
		if(!isset($_SESSION['usuario']) && !isset($_SESSION['password']))
		{
			
			echo "No has iniciado session";
			header("refresh:3;login.php");
			
		}
		else
		{
				$activo=1200;
			if(isset($_SESSION['tiempo']))
			{
				$vidasesion=time()- $_SESSION['tiempo'];
				if($vidasesion>$activo){
					session_unset();
					header("Location: login.php");
				}
			}
			$_SESSION['tiempo']=time();
		    //require('tiempo.php');
		}
?>
