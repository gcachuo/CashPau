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

            <h3 class="col-md-6">Selecciona tu Servicio</h3>
            <h3 class="align-right col-md-5">Ultimos Pagos Realizados</h3>
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
                            <label class="col-md-4">Forma de Pago:</label>
                            <select>
                                <option value="CFE">Efectivo</option>
                                <option value="sapal">Tarjeta</option>
                                <option value="predial">Otro</option>
                            </select>
                        </p>
                        <br />
                        <p>
                            <label class="col-md-4 ">Cantidad:</label>
                            <input class="col-md-8" placeholder="Cantidad" name="monto"/>
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-10">
                        <?php
                        $usuario=$_SESSION['usuario'];
                        require("managerBD.php");
                        $consultar="CALL selectmovimientosusuario ('$usuario')";
                        $ejecutarConsulta= mysql_query($consultar);
                        
                        echo "<table style='width: 100%'>";
                        echo' <tr>';
                        echo'<th>Usuario</th>';
                        echo'<th>Monto</th>';
                        echo'<th>Descripcion</th>';
                        echo'<th>Fecha</th>';
                        echo'</tr>';
                        while ($row = mysql_fetch_array($ejecutarConsulta))
                        {
                            echo "<tr>";
                            echo "<td>".$row["usuario"]."</td>";
                            echo "<td>".$row["monto"]."</td>";
                            echo "<td>".$row["descripcion"]."</td>";
                            echo "<td>".$row["fecha"]."</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                        include("cerrarConexion.php");	
                        ?>
                       
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="col-md-6">
                    <input type="submit" name="pagar" class="col-md-12 btn-primary" value="Aceptar" />
                </div>
                <div class="col-md-6">
                    <input type="reset" class="col-md-12 btn-primary" value="Limpiar" />
                </div>
            </div>
        </form>
    </div>
</body>
</html>
