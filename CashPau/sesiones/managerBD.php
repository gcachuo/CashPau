<?php
	$hostName="localhost";
	$dataBaseName="ppw2";
	$userName="root";
	$passwordDB="sqlserver";
	$conexion= mysql_connect($hostName, $userName, $passwordDB);
	mysql_select_db($dataBaseName,$conexion);
	if($conexion){
		//echo "Conectado correctamente a su servidor";
//		mysql_close($conexion);
	}
	else{
		echo "No puede conectarse a su servidor";
	}
?>