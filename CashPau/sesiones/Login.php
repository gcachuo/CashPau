<?php
	SESSION_START();
	if(isset($_SESSION['usuario']) && isset($_SESSION['password']))
	{
		header("Location:home.php");	
	}
	$mensaje= "";
	if (isset($_POST['nombre'])&&isset($_POST['pass']))
	{
		$examen='SJB_2015';
		$nombre=$_POST['nombre'];
		$pass=$_POST['pass'];
		
		//aquí vamos a verificar en la base de datos
		include("managerBD.php");
		echo "Nombre: ${nombre} Password: ${pass}";
		$consulta="select * from usuarios where nombre='$nombre' and password='$pass'";
		echo $consulta;
		$ejecutarConsulta =  mysql_query($consulta);
		include("cerrarConexion.php"); 
		if (mysql_num_rows($ejecutarConsulta)!=0)
		{ 
			$_SESSION['usuario']=$nombre;
			$_SESSION['password']=$pass;
			$_SESSION['examen']=$examen;
			header("Location:home.php");
		}
		else
			$mensaje="Error a validar sus credenciales, vuelve a intentarlo";
	}
	else
		$mensaje="No ha capturado un valor en el formulario";
	
?>

<html>
	<head></head>
	<body>
		<form name="alex" method="post" action="login.php">
			<?php 
				
			if (!isset($_SESSION['usuario'])&&!isset($_SESSION['password']))
			{
				echo 'Nombre: <input type="text" name ="nombre"/>
				<br/>
				<br/>
				Password: <input type="password" name="pass"/>
				<br/>
				<input type="reset" value="Cancelar" name="cancelar"/>
				<input type="submit" value="OK" name="ok"/>
				<br/>
				<br/>';
				echo $mensaje;
			}
			else
			{
				
			}
			?>
		</form>
		
		
	</body>
</html>