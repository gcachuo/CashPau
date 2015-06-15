<?php
	$activo=60;
			if(isset($_SESSION['tiempo']))
			{
				$vidasesion=time()-$_SESSION['tiempo'];
				if($vidasesion>activo){
					session_unset();
					header(Location: login.php);
				}
			}
			$_SESSION['tiempo']=time();
?>