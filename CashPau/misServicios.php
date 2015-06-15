<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
    <link href="css/site.css" rel="stylesheet" />
</head>
<body>
    <?php
    require ("regresar.php");
    ?>
    <div class="col-md-12">
        <div class="col-md-12">

            <h3 class="col-md-6">NUEVO SERVICIO</h3>
            <h3 class="align-right col-md-5">SERVICIOS ACTUALES</h3>
        </div>

        <form action="home.php" method="post">

            <div class="col-md-12">
                <div class="col-md-6">
                    <select name="idServicio">
                        <option value="1">CFE</option>
                        <option value="2">Sapal</option>
                        <option value="3">Predial</option>
                    </select>

                </div>
            </div>
            <div class="col-md-12">
                <div class="col-md-6">
                    <div class="col-md-6">
                        <p>
                            <label class="col-md-4">ID Folio:</label><input name="numeroCliente" class="col-md-8" placeholder="0000000000000" />
                        </p>
                        <br />
                        <p>
                            <label class="col-md-4">Nombre:</label>
                            <input name="nombre" class="col-md-8" placeholder="Descripcion" />
                        </p>
                    </div>
                </div>
                
            </div>
            <div class="col-md-3">
                <div class="col-md-6">
                    <input type="submit" name="insertservicio" class="col-md-12 btn-primary" value="Guardar" />
                </div>
                <div class="col-md-6">
                    <input type="reset" class="col-md-12 btn-primary" value="Cancelar" />
                </div>
            </div>
        </form>
        <div class="col-md-3"></div>
        <div class="col-md-6">
                    <div class="col-md-10">
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
                </div>
    </div>
</body>
</html>
