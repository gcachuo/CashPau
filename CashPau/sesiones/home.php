<?php 
	require(salir.php);
?>
<html>
	<body>
	<p>Usted ha ingresado con los siguientes datos</p>
	<?php
		require(sesion.php);		
	?>
	<form method="post" action="polizas.php">
		<input type="submit" name="polizas" value="Polizas"/>
	</form>
	<form method="post" action="home.php">
		<input type="submit" name="salir" value="Salir"/>
	</form>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	</body>
</html>