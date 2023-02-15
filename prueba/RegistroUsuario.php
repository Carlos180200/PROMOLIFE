<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>REGISTRO USUARIOS</title>
</head>
<body>
    
<section class="form-registrar">
<div class="container">
    <form action ="" method ="POST" class ="FORMULARIO">
    <h2 class ="titulo">REGISTRAR</h2>
    <?php
    include("conexion.php");
    include("CRUSUARIO.php");
    ?>
    <div class="PADRE">
        <div class ="usuario">
            <label for="">CORREO: </label>
            <input type ="text" name ="usuario">
            </div>
        <div class ="password">
            <label for="">PASSWORD:</label>
            <input type ="text" name ="password">
            </div>
        <div class = "cuenta">
            <input class="boton" type="submit" value ="Registrar" name="Registro">
            <a href="index.html"> REGRESAR </a>
        </div>
    </div>
</div>
</form>
</section>
</body>
</html>