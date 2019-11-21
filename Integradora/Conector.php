<?php

$conexion=@mysqli_connect("localhost", "", "");
if(!$conexion){
  echo "No pudo conectarse";
} else{
    
    echo "Registro confirmado<br><a href='inicio.html'>Conectar</a>";
    $base=mysqli_select_db($conexion, '');
    if(!$base){
        echo "No se encontro la base de datos";
    }
}

$Nombre = $_POST['Nombre'];
$Usuario = $_POST['Usuario'];
$Correo = $_POST['Correo'];
$Contrasena = $_POST['Contrasena'];
$Fecha_Nac = $_POST['Fecha Nacimiento'];
$Ciudad = $_POST['Ciudad'];

$sql = "INSERT INTO REGISTRO VALUES('$Nombre','$Usuario','$Correo','$Contrasena','$Fecha_Nac','$Ciudad')";

    $ejecutar = mysqli_query($conexion,$sql);
    mysqli_close($conexion);

    if(!$ejecutar){
        die('Hubo algun error');
    }else{
        ('Datos guardados');
    }

    ?>