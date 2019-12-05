<?php

$conexion = mysqli_connect('localhost', 'root', '', 'usuario');
if(!$conexion){
  echo "No pudo conectarse";
} else{
    
    $base=mysqli_select_db($conexion, 'usuario');
    if(!$base){
        echo "No se encontro la base de datos";
    }
}

$Nombre = $_POST['Nombre'];
$Usuario = $_POST['Usuario'];
$Correo = $_POST['Correo'];
$Contrasena = $_POST['Contrasena'];
$Fecha_Nac = $_POST['Fecha_Nac'];
$Ciudad = $_POST['Ciudad'];

$sql= "INSERT INTO registro(NOMBRE, USUARIO, CORREO, CONTRASENA, FECHA_NAC, CIUDAD) VALUES ('$Nombre','$Usuario','$Correo','$Contrasena','$Fecha_Nac','$Ciudad')";

    $ejecutar=mysqli_query($conexion,$sql);
    mysqli_close($conexion);

    if(!$ejecutar){
        die('Hubo algun error');
    }else{
        header("Location: inicio.html");
    }

    ?>