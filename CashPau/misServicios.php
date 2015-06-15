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
                    <input type="submit" name="insertservicio" class="col-md-12 btn-primary" value="Guardar" />
                </div>
                <div class="col-md-6">
                    <input type="reset" class="col-md-12 btn-primary" value="Cancelar" />
                </div>
            </div>
        </form>
    </div>
</body>
</html>