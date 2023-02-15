<?php

@$usuario=$_POST['usuario'];
@$password=$_POST['password'];
session_start();
$_SESSION['usuario']=$usuario;
$conexion =mysqli_connect("localhost","root","","prueba");
$consulta=" SELECT * FROM usuario where usuario='$usuario' and password= '$password'";

$resultado=mysqli_query($conexion,$consulta);


$filas=mysqli_fetch_array($resultado);


//Revisa los datos y verifica a donde nos dirigira//
if($filas){
    header("location:inicio.html");
}else{
    ?>
    <?php
    include("index.html");

  ?>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);

?> 

