<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
</head>
<body>

    <form action="home.php" method="post">          
        <?php
        require("regresar.php");
        require("managerBD.php");
        $x=0;
        $consultar="CALL selectusuarios";
        $ejecutarConsulta= mysql_query($consultar);
        echo'<label>Usuario</label><br/>';
        echo '<select name="usuario">';
        while ($row = mysql_fetch_array($ejecutarConsulta))
        {
            echo "<option value='$x'>".$row["usuario"]."</option>";
            $x=$x+1;
        }
        echo'</select>';
        include("cerrarConexion.php");	    
        
        echo'<br/>';
        
        ?>
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
    <label>Folio</label><br />
        <?php
        echo '<input type="text" name="numeroCliente" placeholder=""/>';
        ?>
        <br />
        <input type="submit" name="actuser" class="btn-primary" />
    </form>
</body>
</html>
