<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<script src="js/jsGeneral.js"></script>
</head>

<body>
<div>
<div id="menu">
</div>
<?php
	//usamos require porque con el estamos indicando que se requiere este archivo, PHP Fatal Error	
	//usamos include si solo deseamos incluirlo, si hace falta se ejecuta lo demas pero con error, puede mostrar un error de Warning
	require("managerBD.php");
	$consultar="CALL consulta";
	$ejecutarConsulta= mysql_query($consultar);
	
	echo "<table border='1' align='center'>";
	echo "<tr bgcolor='#CCCCCC'>";
	echo "<td><b>Id</b></td>";
	echo "<td><b>Id de Usuario</b></td>";
	echo "<td><b>Empresa</b></td>";
	echo "<td><b>Costo</b></td>";
	echo "</tr>";
	while ($row = mysql_fetch_array($ejecutarConsulta))
	{
		echo "<tr>";
		echo "<td>".$row["id"]."</td>";
		echo "<td>".$row["userid"]."</td>";
		echo "<td>".$row["empresa"]."</td>";
		echo "<td>".$row["costo"]."</td>";
		echo "</tr>";
	}
	echo "</table>";
	include("cerrarConexion.php");	
		/*
		if (mysql_num_rows($ejecutarConsulta)!=0)
		{ 
			//si no existe le mando otra vez a la portada 
			//header("Location: index.php?errorusuario=si"); 
			echo("<br><h1>Su consulta arrojo un resultado</h1>");
			echo'<table border="2" width="600">';
			if ($line=mysql_fetch_array($ejecutarConsulta))
			{
				do
				{ 
					echo '<tr><td>Id</td><td><input type="Text" value="'.$line["id"].'" disabled/></td></tr>';
					echo '<tr><td>Nombre</td></td><td><input type="Text" value="'.$line["nombre"].'" disabled/></td></tr>';
					echo '<tr><td>Apellido Paterno</td><td><input type="Text" value="'.$line["apePaterno"].'" disabled/></td></tr>';
					echo '<tr><td>Apellido Materno</td><td><input type="Text" value="'.$line["apeMaterno"].'" disabled/></td></tr>';
					echo '<tr><td>Edad</td><td><input type="Text" value="'.$line["edad"].'" disabled/></td></tr>';
					echo '<tr><td colspan="2"><input type="submit" value="Aceptar" onClick="listo()"> </td></tr>';
					echo '</table>';
				}while($line = mysql_fetch_array($ejecutarConsulta));
				
				
			}
		}
		else{
			echo "El registro que desea consultar no existe, será redireccionado en 6 segundos";
			header("refresh:6; url=consultar.html");
		}
	}
	else
	{
		echo "No ha escrito un id ha ser eliminado, ser"?>&aacute; <?php echo " redireccionado en 6 segundos";
		header("refresh:6; url=inscripciones.php");
	}*/

?>

<div>

</div>
<div>
    
    
    </div>
</div>
</body>
</html>
