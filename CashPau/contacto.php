<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
</head>
<body>
    <?php
    require ("regresar.php");
    ?>
    <div class="col-md-2"></div>
    <h2>CONTACTO</h2>
    <div class="col-md-12">
        <div class="col-md-1"></div>
        <div class="col-md-3">
            <p>
                <label class="col-md-4">Nombre:</label>
                <input class="col-md-8" placeholder="Nombre" />
            </p>
            <br />
            <p>
                <label class="col-md-4">Usuario:</label><input class="col-md-8" placeholder="Usuario" />
            </p>
            <br />
            <p>
                <label class="col-md-4"></label>
                <textarea placeholder="Quejas / Comentarios" class="col-md-8" name="Text1" cols="40" rows="5"></textarea>
            </p>
            <br />
            <p>
                <label class="col-md-4"></label>
                <input type="submit" class="col-md-8 btn-primary" value="Enviar" />
            </p>
        </div>
        <div class="col-md-3"></div>
        <div class="col-md-2">
            <iframe width="600" height="450" frameborder="0" style="border: 0" src="https://www.google.com/maps/embed/v1/place?q=Universidad%20De%20La%20Salle%20Baj%C3%ADo%2C%20Lomas%20del%20Campestre%2C%20Le%C3%B3n%20de%20los%20Aldama%2C%20M%C3%A9xico&key=AIzaSyCVY4FCuG-Hvtjvgk5xuqMFtpjoG4QxgSE"></iframe>
        </div>
    </div>
    <?php
    require("redes.php");
    ?>
</body>
</html>
