<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Home Admin</title>
    <link href="css/bootstrap-theme.css" rel="stylesheet" />
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/site.css" rel="stylesheet" />
</head>
<body>
   
    <div class="col-md-3">
    </div>
    <div class="col-md-2">
        <div>
            <img src="" alt="imagen" width="150" height="150" />
        </div>
        <div>
            <input type="button" class="col-md-9 btn-primary" value="Mi Perfil" />
        </div>
    </div>
    <div class="col-md-5">
        <div class="col-md-6">
            <form action="home.php" method="post">
                <input type="submit" name="reguser" class="col-md-12 btn-primary" value="Registrar Usuario" />
            </form>
        </div>
        <div class="col-md-6">
            <form action="home.php" method="post">
                <input type="hidden" name="adminuser" class="col-md-12 btn-primary" value="Administrar Usuarios" />
            </form>
        </div>
        <div class="col-md-6">
            <form action="home.php" method="post">
                    <input type="submit" name="miserv" class="col-md-12 btn-primary" value="Agregar Servicio" />
                </form>
            <input type="hidden" class="col-md-12 btn-primary" value="Agregar Servicio" />
        </div>
        <div class="col-md-6">
            <input type="hidden" class="col-md-12 btn-primary" value="Administrar Servicios" />
        </div>
    </div>
    <?php
    require("redes.php");
    ?>


</body>
</html>
