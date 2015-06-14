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

        <form>

            <div class="col-md-12">
                <div class="col-md-6">
                    <select>
                        <option value="cfe">CFE</option>
                        <option value="sapal">Sapal</option>
                        <option value="predial">Predial</option>

                    </select>

                </div>
            </div>
            <div class="col-md-12">
                <div class="col-md-6">
                    <div class="col-md-6">
                        <p>
                            <label class="col-md-4">Forma de Pago:</label>
                            <select>
                                <option value="cfe">Efectivo</option>
                                <option value="sapal">Tarjeta</option>
                                <option value="predial">Otro</option>
                            </select>
                        </p>
                        <br />
                        <p>
                            <label class="col-md-4">Cantidad:</label>
                            <input class="col-md-8" placeholder="Cantidad" />
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-10">
                        <table style="width: 100%">
                            <tr>
                                <th>Servicio</th>
                                <th>Nombre</th>
                                <th>Folio</th>
                            </tr>
                            <tr>
                                <td>Sapal</td>
                                <td>Casa</td>
                                <td>45ERT2345</td>
                            </tr>
                            <tr>
                                <td>CFE</td>
                                <td>Fabrica</td>
                                <td>FKS4567EER</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="col-md-6">
                    <input type="button" class="col-md-12 btn-primary" value="Aceptar" />
                </div>
                <div class="col-md-6">
                    <input type="button" class="col-md-12 btn-primary" value="Limpiar" />
                </div>
            </div>
        </form>
    </div>
</body>
</html>
