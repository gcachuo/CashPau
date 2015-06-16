<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
</head>
<body>
    <?php      
    require("regresar.php");
    require("managerBD.php");
    $x=1;    
    echo'<form action="home.php" method="post">';        
    $consultar="CALL selectusuarios";
    $ejecutarConsulta= mysql_query($consultar);
    echo'<label>Usuario</label><br/>';
    echo '<select name="usuario">';
    while ($row = mysql_fetch_array($ejecutarConsulta))
    {
        echo "<option value=".$row["usuario"].">".$row["usuario"]."</option>";
        $x=$x+1;
    }
    echo'</select>';
    include("cerrarConexion.php");	    
    echo'<br/>';
    echo'
        <label>Tipo de Usuario</label><br />
        <select name="tipoUsuario">
            <option value="u">Usuario</option>
            <option value="a">Administrador</option>
        </select><br />
        <label>Servicio</label><br />
        <select name="idServicio">
            <option value="1">CFE</option>
            <option value="2">Sapal</option>
            <option value="3">Predial</option>
        </select><br />
    <label>Folio</label><br />';    
    echo '<input type="text" name="numeroCliente" placeholder=""/>';    
    echo '<br />';
    echo'<input type="submit" name="actuser" class="btn-primary" />';
    echo'</form>';
    require("managerBD.php");
    $consultar="CALL selectusuarios";
    $ejecutarConsulta= mysql_query($consultar);    
    echo "<table style='width: 100%'>";
    echo' <tr>';
    echo'<th>Usuario</th>';
    echo'<th>Nombre</th>';
    echo'<th>Apellido Paterno</th>';
    echo'<th>Tipo de Usuario</th>';
    echo'</tr>';
    while ($row = mysql_fetch_array($ejecutarConsulta))
    {
        echo "<tr>";
        echo "<td>".$row["usuario"]."</td>";
        echo "<td>".$row["nombre"]."</td>";
        echo "<td>".$row["apePaterno"]."</td>";        
        echo "<td>".$row["tipoUsuario"]."</td>";
        echo "</tr>";
    }
    echo "</table>";
    include("cerrarConexion.php");	
    echo'<br/>';    
    require("managerBD.php");
    $consultar="CALL selectservicioscliente";
    $ejecutarConsulta= mysql_query($consultar);    
    echo "<table style='width: 100%'>";
    echo' <tr>';
    echo'<th>Folio</th>';
    echo'<th>Usuario</th>';
    echo'<th>Servicio</th>';
    echo'<th>Nombre</th>';
    echo'</tr>';
    while ($row = mysql_fetch_array($ejecutarConsulta))
    {
        echo "<tr>";
        echo "<td>".$row["numeroCliente"]."</td>";
        echo "<td>".$row["usuario"]."</td>";
        echo "<td>".$row["idServicio"]."</td>";        
        echo "<td>".$row["nombre"]."</td>";
        echo "</tr>";
    }
    echo "</table>";
    include("cerrarConexion.php");	
    ?>
</body>
</html>
