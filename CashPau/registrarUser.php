<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <head>
    <title>Login</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/css/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="assets/css/main.css" />
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie/v8.css" /><![endif]-->
    <!--[if lte IE 8]><script src="assets/css/ie/respond.min.js"></script><![endif]-->
</head>
</head>
<body>
   
    <div class="container">
        <?php
        require("regresar.php");
        ?>
        <div class="col-md-2">
        </div>
        <div class="col-md-2">


        </div>
        <form action="home.php" method="post">
            <?php
            session_start();
            $_SESSION['tipoUsuario']="w";
            require("formRegU.php");
            ?>
        </form>
      
    </div>
</body>
</html>
