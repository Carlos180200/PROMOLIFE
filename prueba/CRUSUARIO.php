<?php
if (!empty($_POST["Registro"])){
    if (!empty($_POST["correo"]) or empty($_POST["password"])){
        echo '<div class = "alerta">CAMPOS VACIOS</div>';
    } else{
        $usuario=$_POST["usuario"];

        //para tener seguridad se encripta la contraseña, hay diferentes modo pero se eligio el más básico//
        $password=md5($_POST["password"]);
        $sql=$conexion -> query ("insert into usuario (usuario, password) values ('$usuario','$password')");
    }
}



?>