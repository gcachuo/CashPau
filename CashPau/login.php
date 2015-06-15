<?php

session_start();
if(isset($_SESSION['usuario']) && isset($_SESSION['password'])&&isset($_SESSION['tipoUsuario'])&&isset($_SESSION['nombre']))
{
    //header("Location:home.php");	
}
$mensaje= "";
if (isset($_POST['usuario'])&&isset($_POST['password']))
{
    $usuario=$_POST['usuario'];
    $password=$_POST['password'];
    
    //aquí vamos a verificar en la base de datos
    include("managerBD.php");
    $consulta="select * from usuarios where usuario='$usuario' and password='$password'";
    $ejecutarConsulta =  mysql_query($consulta);
    include("cerrarConexion.php"); 
    
}
else
    $mensaje="No ha capturado un valor en el formulario";
if (isset($_POST['usuario'])&&isset($_POST['password']))
{
    if($_POST['usuario']!=""&&($_POST['password']!=""))
    {
        if (mysql_num_rows($ejecutarConsulta)!=0)
        { 
            try
            {
                
                $campos=mysql_fetch_array($ejecutarConsulta);
                $_SESSION['usuario']=$usuario;
                $_SESSION['password']=$password;
                $_SESSION['nombre']=$campos['nombre'];
                $_SESSION['tipoUsuario']=$campos['tipoUsuario'];
                
                if(isset($_SESSION['usuario']) && isset($_SESSION['password'])&&isset($_SESSION['tipoUsuario'])&&isset($_SESSION['nombre']))
                {
                    header("Location:home.php");	
                }
            }
            catch (Exception $exception)
            {
                echo $exception;
                //session_unset();
                header("refresh:2;login.php");
            }                  
            
        }
        else
            echo "<center><br/>Error a validar sus credenciales, vuelve a intentarlo</center>";
    }
    else
        echo"<br/><center>No ha capturado valores en el formulario</center>";
}
?>
<!DOCTYPE HTML>
<!--
	Read Only by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>Login</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/css/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="assets/css/main.css" />
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie/v8.css" /><![endif]-->
    <!--[if lte IE 8]><script src="assets/css/ie/respond.min.js"></script><![endif]-->
</head>
<body>

    <!-- Header -->
    <section id="header">
        <header>
            <span class="image avatar">
                <img src="images/sinnombre.png" alt="" /></span>

            <p>
                Un rapido y seguro servicio para ti!<br />
            </p>
        </header>
        <nav id="nav">
            <ul>
                <li><a href="#one" class="active">Iniciar sesión</a></li>
                <!--<li><a href="#two">Things I Can Do</a></li>-->
                <!--<li><a href="#three">A Few Accomplishments</a></li>-->

            </ul>
        </nav>
        <footer>
            <ul class="icons">
                <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="icon fa-linkedin"><span class="label">Linkedin</span></a></li>

            </ul>
        </footer>
    </section>

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Main -->
        <div id="main">

            <!-- One -->
            <section id="one">
                <div class="container">
                    <header class="major">
                        <form method="post" action="login.php">
                            <p>Usuario: </p>
                            <div class="row uniform">
                                <div class="6u 12u(xsmall)">
                                    <input type="text" name="usuario" id="name" placeholder="nombre de usuario" />
                                </div>
                            </div>
                            <br />
                            <p>Contraseña:</p>
                            <div class="row uniform">
                                <div class="6u 12u(xsmall)">
                                    <input type="password" name="password" id="password" placeholder="contraseña" />
                                </div>
                            </div>
                            <div class="row uniform">
                                <div class="12u">
                                    <ul class="actions">
                                        <li>
                                            <input type="submit" class="special" value="Iniciar Sesión" name="ok" />

                                        </li>

                                        <li>
                                            <input type="submit" value="Registrarse" name="registrar" class="btn-info" />
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                </div>
            </section>
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />



        </div>

        <!-- Footer -->
        <section id="footer">
            <div class="container">
                <ul class="copyright">
                    <li>&copy; Untitled. All rights reserved.</li>
                    <li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
                </ul>
            </div>
        </section>

    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrollzer.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>
