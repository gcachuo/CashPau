<!doctype html>
<html>
<head>
</head>

<body>

<?php
SESSION_START();
if(isset($_SESSION['usuario']) && isset($_SESSION['password']))
{

	require("managerBD.php");
		$consultar="SELECT * FROM polizas";
		$ejecutarConsulta= mysql_query($consultar);
		include("cerrarConexion.php");
		if (mysql_num_rows($ejecutarConsulta)!=0)
		{ 
			echo'<table border="2" width="600">';
			echo'<tr><td>idusuarios</td><td>empresa</td><td>costo</td></tr>';
			if ($line=mysql_fetch_array($ejecutarConsulta))
			{
				do
				{ 
				echo'<tr>';
					echo '<td><input type="Text" value="'.$line["idusuarios"].'" disabled/></td>';
					echo '<td><input type="Text" value="'.$line["empresa"].'" disabled/></td>';
					echo '<td><input type="Text" value="'.$line["costo"].'" disabled/></td>';
					echo'</tr>';
					
				}while($line = mysql_fetch_array($ejecutarConsulta));
				
				
			}
			
					echo '<tr><td colspan="3"><center>
					<form method="post" action="home.php">
		<input type="submit" name="salir" value="Salir"/>
	</form>
	</center> </td></tr>';
			echo '</table>';
		}
		else{
			echo'<table border="2" width="600">';
			echo'<tr><td>idusuarios</td><td>empresa</td><td>costo</td></tr>';
			echo '</table>';
		}
		echo'<div>
	<form method="post" action="guardar.php" name="inscripcion">
	<label>idusuario</label>
	<input type="text" name="idusuario" required><br/>
	<label>empresa</label>
	<input type="text" name="empresa" required><br/>
	<label>costo</label>
	<input type="text" name="costo" required><br/>
	<input type="submit" value="Guardar">
	</form>
</div>';
}
else{
echo'<h1>No ha iniciado sesion</h1>';
header("refresh:3;login.php");
}
?>


</body>
</html>