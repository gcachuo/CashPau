<?php
SESSION_START();
	
	if(isset($_POST['salir']))
	{
		session_unset();
		header("Location:login.php");
	}
?>