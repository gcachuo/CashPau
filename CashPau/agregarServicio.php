<div class="container">
    <br />
    <br />
    <h3>Agregar Servicio</h3>
    <br />
    <br />
    <br />
    <form id="contact_form" action="home.php" method="POST" enctype="multipart/form-data">


        <div class="row uniform">
            <h1>Tipo de Servicio: </h1>
            <div class="6u 12u(xsmall)">
                <select name="idServicio">
                    <option value="1">CFE</option>
                    <option value="2">Sapal</option>
                    <option value="3">Predial</option>
                </select>
            </div>
        </div>
        <div class="row uniform">
            <h1>Folio: </h1>
            <div class="6u 12u(xsmall)">
                <input type="text" name="numeroCliente" placeholder="0000000000000" />
            </div>
        </div>
        <div class="row uniform">
            <h1>Nombre: </h1>
            <div class="6u 12u(xsmall)">
                <input type="text" name="nombre" placeholder="Nombre" />
            </div>
        </div>
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />



        <input type="submit" class="special" name="insertservicio" value="Agregar" />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
													&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
													<input type="reset" value="Cancelar" />


    </form>
</div>
<br />
<br />
<br />
<br />
<br />
