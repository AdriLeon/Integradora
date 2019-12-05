<?php

$Usuario = $_POST['Usuario'];
$Contrasena = $_POST['Contrasena'];

$conexion = mysqli_connect('localhost', 'root', '', 'usuario');

$consulta = "SELECT * FROM REGISTRO WHERE Usuario = '$Usuario' and Contrasena = '$Contrasena'";

$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);

if($filas>0){
    header("Location: inicio.html");
}else{
    echo "Error en la Autentificacion";
}

mysqli_free_result($resultado);
mysqli_close($conexion);
?>