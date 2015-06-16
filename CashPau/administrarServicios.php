<div class="container">
    <h3>Administrar Servicios</h3>
    <br />
    <br />
    <br />
    <br />
    <h1>Servicios registrados</h1>
    <div class="table-wrapper">
        <?php
        if( $_SESSION['tipoUsuario']=='a')
        {
            require("managerBD.php");
            $consultar="CALL selectservicioscliente";
            $ejecutarConsulta= mysql_query($consultar);
            
            echo "<table style='width: 100%'>";
            echo' <tr>';
            echo'<th>Folio</th>';
            echo'<th>Usuario</th>';
            echo'<th>Servicio</th>';
            echo'<th>Nombre</th>';
            echo'<th>Fecha</th>';
            echo'</tr>';
            while ($row = mysql_fetch_array($ejecutarConsulta))
            {
                echo "<tr>";
                echo "<td>".$row["numeroCliente"]."</td>";
                echo "<td>".$row["usuario"]."</td>";
                echo "<td>".$row["idServicio"]."</td>";
                echo "<td>".$row["nombre"]."</td>";
                echo "<td>".$row["fecha"]."</td>";
                echo "</tr>";
            }
            echo "</table>";
            include("cerrarConexion.php");	
        }
        else
        {
            $usuario=$_SESSION['usuario'];
            require("managerBD.php");
            $consultar="CALL selectserviciosclienteusuario ('$usuario')";
            $ejecutarConsulta= mysql_query($consultar);                            
            echo "<table style='width: 100%'>";
            echo' <tr>';
            echo'<th>Folio</th>';
            echo'<th>Usuario</th>';
            echo'<th>Servicio</th>';
            echo'<th>Nombre</th>';
            echo'<th>Fecha</th>';
            echo'</tr>';
            while ($row = mysql_fetch_array($ejecutarConsulta))
            {
                echo "<tr>";
                echo "<td>".$row["numeroCliente"]."</td>";
                echo "<td>".$row["usuario"]."</td>";
                echo "<td>".$row["idServicio"]."</td>";
                echo "<td>".$row["nombre"]."</td>";
                echo "<td>".$row["fecha"]."</td>";
                echo "</tr>";
            }
            echo "</table>";
            include("cerrarConexion.php");	
        }
        ?>
    </div>
    <input type="submit" class="special" value="Modificar" />
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="reset" value="Eliminar" />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
</div>
<br />
<br />
<br />
<br />
<br />
