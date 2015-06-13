
<?php
	
	if(isset($_SESSION['usuario']) && isset($_SESSION['password']))
	{
		header("Location:home.php");	
	}
	$mensaje= "";
	if (isset($_POST['usuario'])&&isset($_POST['password']))
	{
		$nombre=$_POST['usuario'];
		$pass=$_POST['password'];
		
		//aquí vamos a verificar en la base de datos
		include("managerBD.php");
		echo "Nombre: ${nombre} Password: ${pass}";
		$consulta="select * from usuarios where nombre='$nombre' and password='$pass'";
		echo $consulta;
		$ejecutarConsulta =  mysql_query($consulta);
		include("cerrarConexion.php"); 
		if (mysql_num_rows($ejecutarConsulta)==0)
		{ 
			$_SESSION['usuario']=$nombre;
			$_SESSION['password']=$pass;
			header("Location:home.php");
		}
		else
			$mensaje="Error a validar sus credenciales, vuelve a intentarlo";
	}
	else
		$mensaje="No ha capturado un valor en el formulario";
	
?>

<html>
	<head><link href="css/site.css" rel="stylesheet" />
        <link href="css/bootstrap.css" rel="stylesheet" />
    </head>
	<body>
		<form name="login" method="post" action="login.php">
			<?php 
				
			if (!isset($_SESSION['usuario'])&&!isset($_SESSION['password']))
			{
                echo'<div class="row">';
                echo'<div class="col-md-4"></div>';
               // echo'<div class="col-md-4">';
               // echo'<img src="" alt="imagen" width="150" height="150"/>';
               // echo'</div>';
                echo'<div class="col-md-4">';
				echo '<label class="col-md-6">Usuario:</label> <input type="text" name ="usuario" class="col-md-6"/>
				<br/>
				<br/>
				<label class="col-md-6">Contraseña:</label> <input type="password" name="password" class="col-md-6"/>
				<br/>                
				<input type="submit" value="Iniciar Sesión" name="ok" class="btn-primary"/>
				<input type="button" value="Registrarse" name="registrar" class="btn-info"/>
				<br/>
				<br/>';
                echo'</div>';
                echo'</div>';
			}			
			?>
		</form>
		
		
	</body>
</html>
