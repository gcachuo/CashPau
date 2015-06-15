<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
</head>
<body>
    <?php
    require("regresar.php");
    ?>
    <div class="col-md-12">
        <div class="col-md-2">
        </div>
        <div class="col-md-2">

            <div>
                <img src="" alt="imagen" width="150" height="150" />
            </div>
            <div>
                <input type="button" class="col-md-9 btn-primary" value="Subir Foto" />
            </div>

        </div>
        <form action="home.php" method="post">
            <?php
            require("formRegU.php");
            ?>
        </form>
        <?php
        try
        {
            if(isset( $_SESSION['insertusuarios']))
                echo $_SESSION['insertusuarios'];
            else
            {
                $_SESSION['insertusuarios']="vacio";
            	echo $_SESSION['insertusuarios'];
            }
            
        }
        catch (Exception $exception)
        {
        }
        
        ?>
    </div>
</body>
</html>
