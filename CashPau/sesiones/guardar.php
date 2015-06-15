<?php
if($_POST["idusuario"] && $_POST["empresa"] && $_POST["costo"]){
    require("managerBD.php");
    $idusuario=$_POST["idusuario"];
    $empresa=$_POST["empresa"];
    $costo=$_POST["costo"];
    $vars=get_defined_vars();
    mysql_select_db($dataBaseName,$conexion);	
	//$q=$conexion->exec('call insertar()');
	//if($q)
	//{
	//	header("refresh:0;url=polizas.php");
	//}
    $consulta="Insert into polizas (idusuarios,empresa,costo) values('$idusuario','$empresa','$costo')";
    $ejecutarConsulta=mysql_query($consulta, $conexion);
    
    if($ejecutarConsulta){
		header("refresh:0;url=polizas.php");
	}
    else{
        //echo $ejecutarConsulta;
        echo "Ocurrió un error al guardar los datos";
        header("Location:inscripcion.php");
    }
	
	}
else
{
    echo "Se presentó un error, por favor contacte a un programador en PHP de la UDLSB, gracias";
    header("refresh:2; url=polizas.php");
}
?>