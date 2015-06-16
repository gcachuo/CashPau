<div class="col-md-4">
    <div class="col-md-12">
        <label class="col-md-6">Nombre:</label>
        <input name="nombre" type="text" class="col-md-6 " placeholder="Nombre" required pattern="^[a-zA-Zñ ]{1,100}$" />
    </div>
    <div class="col-md-12">
        <label class="col-md-6">Apellido Paterno:</label>
        <input name="apePaterno" type="text" class="col-md-6 " placeholder="Apellido Paterno" required pattern="^[a-zA-Zñ ]{1,100}$" />
    </div>
    <div class="col-md-12">
        <label class="col-md-6">Apellido Materno:</label>
        <input name="apeMaterno" type="text" class="col-md-6 " placeholder="Apellido Materno" pattern="^[a-zA-Zñ ]{1,100}$" />
    </div>
    <div class="col-md-12">
        <label class="col-md-6">Usuario:</label>
        <input name="u" type="text" class="col-md-6 " placeholder="Usuario" required pattern="^[a-zA-Z0-9]{1,10}$" />
    </div>
    <div class="col-md-12">
        <label class="col-md-6">Password:</label>
        <input name="p" type="password" class="col-md-6 " placeholder="Password" required pattern="^.{1,100}$" />
    </div>
    <div class="col-md-12">
        <label class="col-md-6">Re-Password:</label>
        <input name="repassword" type="password" class="col-md-6 " placeholder="Re-Password" required />
    </div>
    <div class="col-md-12">
        <label class="col-md-6">Fecha de Nacimiento:</label>
        <input name="fechaNacimiento" type="date" class="col-md-6 " required />
    </div>
    <div class="col-md-12">
        <label class="col-md-6">Correo:</label>
        <input name="correo" type="text" class="col-md-6 " placeholder="Correo" required />
    </div>
</div>
<div class="col-md-2">
    <input type="submit" name="registrarusuario" class="special" value="Agregar" />
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="reset" value="Cancelar" />
</div>
