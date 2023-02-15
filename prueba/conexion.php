<?php
//conexión de la base//
$conexion=mysqli_connect("localhost","root","","prueba");
if($conexion -> connect_error)
die("ERROR AL CONECTARSE A LA BASE DE DATOS");
?>