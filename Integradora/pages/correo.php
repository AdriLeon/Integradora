<?php 

$Nombre = $_POST['Nombre'];
$Destinatario = $_POST['Correo'];
$Asunto = 'Bienvenido a FUMADORES ANONIMOS';

$Texto = "Hola $Nombre \n\n\n";
$Texto .= "¡Bienvenido a Fumadores anonimos!, el sitio donde te informaremos acerca del tabaco y las formas en las que puedes dejarlo. \n";
$Texto .= "No estas solo, muchas personas como tu buscan dejar este vicio y mejorar sus vidas y, aunque este sitio es solo una guia, tenemos completa confianza que de podras mejorar tu vida. \n";
$Texto .= "Tu progreso dependera de ti. ¡PUEDES LOGRARLO! \n\n\n";
$Texto .= "-El equipo de Fumadores Anonimos";

//enviar mensaje
mail($Destinatario, $Asunto, $Texto);

?>