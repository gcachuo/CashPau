<!DOCTYPE HTML>
<!--
	Read Only by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>Usuario</title>
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
                <img src="images/profile.png" alt="" /></span>

            <p>
                Bienvenido Usuario<br />
            </p>
        </header>
        <nav id="nav">
            <ul>

                <!--<li><a href="#two">Things I Can Do</a></li>-->
                <!--<li><a href="#three">A Few Accomplishments</a></li>-->
                <li><a href="#one">Home</a></li>
                <li><a href="#two">León</a></li>
                <li><a href="#three">Pagar servicios</a></li>
                <li><a href="#four">Agregar servicios</a></li>
                <li><a href="#five">Contacto</a></li>
                <li><a href="cerrar.php">Cerrar Sesión</a></li>
            </ul>
        </nav>
        <footer>
            <ul class="icons">
                <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="icon fa-linkedin"><span class="label">Instagram</span></a></li>

            </ul>
        </footer>
    </section>

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Main -->
        <div id="main">

            <section id="one">
                <div class="container">
                    <h3>Bienvenido (Usuario)</h3>
                    <header class="major">
                </div>

                <div class="container">

                    <a href="userprofile.html">
                        <img src="images/ussm.png" alt=""
                            width="170" height="170" /></a><br />

                    <form method="post" action="#">
                        <input type="submit" class="special" value="Editar Perfil" />

                        <br />
                        <br />




                        <ul class="feature-icons">
                        </ul>
                        <a href="homeusuar.html#four">
                            <img src="images/btnser.png" alt=""
                                width="170" height="170" /></a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
													&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
													&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
													<a href="homeusuar.html#three">
                                                        <img src="images/btnpag.png" alt=""
                                                            width="170" height="170" /></a>
                        <br />
                        <br />
                        <br />


                    </form>
                </div>
            </section>
            <section id="two">
                <div class="container">
                    <h2>León</h2>
                    <br />
                    <iframe width="800" height="400" src="https://www.youtube.com/embed/qnG35LqYkj4" frameborder="0" allowfullscreen></iframe>
                    <br />
                    <br />
                    <p>
                        León cuenta con una población total de 1,785,237 habitantes, siendo la más poblada de la zona metropolitana, el área del territorio municipal comprende 1,183.20 km² , equivalentes al 3.87% de la superficie total del estado de Guanajuato.

Limita con los siguientes municipios: al Norte con el municipio de San Felipe; al Este con los de Guanajuato y Silao; al Sur con los de Silao, Romita, y San Francisco del Rincón y; al Oeste con el de Purísima y los municipios de Lagos de Moreno y La Unión de San Antonio del Estado de Jalisco.
 la cabecera municipal del municipio es León.

Por su importancia social, cultural, politica, económica, industrial y comercial,


                </div>
            </section>




            <section id="three">
                <div class="container">
                    <h2>Pagar Servicio</h2>
                    Selecciona un servicio<select name="selCombo" size="1" onchange="javascript:alert('prueba');">
                        <option value="link pagina 1">Sapal</option>
                        <option value="link pagina 2">CFE</option>
                        <option value="link pagina 3">Predial</option>

                    </select>

                    <form method="post" action="#">
                        forma de pago<select name="selCombo" size="1" onchange="javascript:alert('prueba');">
                            <option value="link pagina 1">Efectivo</option>
                            <option value="link pagina 2">Tarjeta</option>
                            <option value="link pagina 3">otro</option>

                        </select>

                        <form method="post" action="#">
                            <br />
                            <div class="row uniform">
                                <h1>Cantidad: </h1>
                                <div class="6u 12u(xsmall)">
                                    <input type="text" name="name" id="name" placeholder="$" />
                                </div>
                            </div>

                            <div class="row uniform">
                                <div class="12u">
                                    <ul class="actions">
                                        <li>
                                            <input type="submit" class="special" value="Pagar" /></li>
                                        <li>
                                            <input type="reset" value="Cancelar" /></li>


                                    </ul>
                                </div>
                            </div>
                        </form>

                        <br />
                        <h3>Pagos registrados</h3>

                        <div class="table-wrapper">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Id Servicio</th>
                                        <th>Fecha</th>
                                        <th>Cantidad</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>CASA</td>
                                        <td>07/07/15</td>
                                        <td>$400</td>
                                    </tr>
                                    <tr>
                                        <td>CASA</td>
                                        <td>03/07/15</td>
                                        <td>$350</td>
                                    </tr>
                                    <tr>
                                        <<td>EMPRESA</td>
                                        <td>03/06/15</td>
                                        <td>$350</td>
                                    </tr>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="2"></td>

                                    </tr>
                                </tfoot>
                            </table>
                        </div>

                        <br />
                        <br />
                        <br />
                </div>
            </section>

            <section id="four">
                <div class="container">
                    <h3>Agregar Servicio</h3>
                    Selecciona un servicio<select name="selCombo" size="1" onchange="javascript:alert('prueba');">
                        <option value="link pagina 1">Sapal</option>
                        <option value="link pagina 2">CFE</option>
                        <option value="link pagina 3">Predial</option>

                    </select>

                    <form method="post" action="#">
                        <br />
                        <div class="row uniform">
                            <div class="6u 12u(xsmall)">
                                <input type="text" name="name" id="name" placeholder="Nombre de servicio" />
                            </div>
                        </div>

                        <div class="row uniform">
                            <div class="6u 12u(xsmall)">
                                <input type="text" name="name" id="name" placeholder="Nombre de identificador" />
                            </div>
                        </div>

                        <div class="row uniform">
                            <div class="6u 12u(xsmall)">
                                <input type="text" name="name" id="name" placeholder="numero de folio" />
                            </div>
                        </div>

                        <div class="row uniform">
                            <div class="12u">
                                <ul class="actions">
                                    <li>
                                        <input type="submit" class="special" value="Guardar" /></li>
                                    <li>
                                        <input type="reset" value="Cancelar" /></li>


                                </ul>
                            </div>
                        </div>
                    </form>

                    <br />
                    <h2>Servicios registrados</h2>
                    <div class="table-wrapper">
                        <table>
                            <thead>
                                <tr>
                                    <th>Servicio</th>
                                    <th>Nombre</th>
                                    <th>Folio</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Sapal</td>
                                    <td>CASA</td>
                                    <td>5673HDKWND6SBWHSJWN</td>
                                </tr>
                                <tr>
                                    <td>CFE</td>
                                    <td>NEGOCIO</td>
                                    <td>737833HDHBSBXHS2UWUW</td>
                                </tr>
                                <tr>
                                    <td>Predial</td>
                                    <td></td>
                                    <td></td>
                                </tr>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2"></td>

                                </tr>
                            </tfoot>
                        </table>
                    </div>

                    <br />
                    <br />
                    <br />

                </div>
            </section>

            <section id="five">
                <div class="container">
                    <h3>CONTACTO</h3>

                    <form id="contact_form" action="#" method="POST" enctype="multipart/form-data">
                        <div class="row">



                            <label for="name">Tu nombre:</label><br />
                            <input id="name" class="input" name="name" type="text" value="" size="15" /><br />
                        </div>
                        <div class="row">
                            <label for="email">Tu email:</label><br />
                            <input id="email" class="input" name="email" type="text" value="" size="15" /><br />
                        </div>
                        <div class="row">
                            <label for="message">Tu mensaje:</label><br />
                            <textarea id="message" class="input" name="message" rows="7" cols="15"></textarea><br />
                        </div>
                        <br />
                        <input type="submit" class="special" value="Enviar" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
													&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
													<input type="reset" value="Cancelar" />


                    </form>
                    <script type="text/javascript"
                        src="http://maps.google.com/maps/api/js?sensor=false"></script>

                    <div id="map" style="width: 500px; height: 180px"></div>

                    <script type="text/javascript">
                        var myOptions = {
                            zoom: 12,
                            center: new google.maps.LatLng(21.1219138, -101.6660115),
                            mapTypeId: google.maps.MapTypeId.ROADMAP
                        };

                        var map = new google.maps.Map(document.getElementById("map"), myOptions);
                    </script>

                </div>
            </section>

        </div>

        <!-- Footer -->
        <section id="footer">
            <div class="container">
                <ul class="copyright">
                    <li>&copy; Todos los derechos reservados.</li>
                    <li>CASHPAW : <a href="http://html5up.net">tels: 477-777-0000, 477-777-1111 </a></li>
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
