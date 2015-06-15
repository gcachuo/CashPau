<?php

?>
<!DOCTYPE HTML>
<!--
	Read Only by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>Administrador</title>

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
                Bienvenido administrador<br />
            </p>
        </header>
        <nav id="nav">
            <ul>

                <!--<li><a href="#two">Things I Can Do</a></li>-->
                <!--<li><a href="#three">A Few Accomplishments</a></li>-->
                <li><a href="#one">Home</a></li>
                <li><a href="#two">Agregar Servicio</a></li>
                <li><a href="#three">Administrar Servicios</a></li>
                <li><a href="#four">Agregar Usuario</a></li>
                <li><a href="#five">Administrar Usuarios</a></li>
                <li><a href="cerrar.php">Cerrar Sesión</a></li>
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
                        </br>
									<h5>Administrador</h5>
                        </br></br></br>
									<p></p>
                        <form method="post" action="#">
                            &nbsp;&nbsp;&nbsp;&nbsp;
										<br />

                            <div class="row uniform">
                                <center>
											<div class="30u">
												<ul class="actions">
													<a href="homeadmin.php#four"><img src="images/adminuser.png" alt=""
  width="140" height="140" /></a>&nbsp;&nbsp;&nbsp;&nbsp;
													&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
													&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
													<a href="homeadmin.php#five"><img src="images/adminusers.png" alt=""
  width="140" height="140" /></a></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												
												&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
													&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
													&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
													<a href="homeadmin.php#two"><img src="images/adminserv.png" alt=""
  width="140" height="140" /></a>&nbsp;&nbsp;&nbsp;&nbsp;
													&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
													&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
													<a href="homeadmin.php#three"><img src="images/adminservs.png" alt=""
  width="140" height="140" /></a></li>
													</br></br></br></br></br></br></br></br>
													
												</ul>
                                                </div>
											</center>
                            </div>

                        </form>
                    </header>
                </div>
            </section>
            <section id="two">
                <?php
                require("agregarServicio.php");
                ?>
            </section>


            <section id="three">
                <?php
                require("administrarServicios.php");
                ?>
            </section>

            <section id="four">
                <?php
                require("agregarUsuario.php");
                ?>
            </section>

            <section id="five">
                <div class="container">
                    <h3>Administrar Usuarios</h3>
                    </br></br></br></br>
							<h1>Usuarios registrados</h1>
                    <center>
					<div class="table-wrapper">
                        
                        <?php
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
                        ?>
										</div>
										<input type="submit" class="special" value="Modificar" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
													&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
													<input type="reset" value="Eliminar" />
                    </br></br></br></br></br></br></br>
                </div>
            </section>

            <section id="six">
                <div class="container">
            </section>



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
