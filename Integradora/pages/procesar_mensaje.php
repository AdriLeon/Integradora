 <?php

$conexion = mysqli_connect('localhost', 'root', '', 'comentario');

mysqli_select_db($conexion, "comentario");

if ($conexion)
{
    $Titre = $_POST["Titre"];
    $Date = $_POST["Date"];
    $Text = $_POST["Text"];
    
	mysqli_query($conexion,"INSERT INTO texte VALUES ('$Titre', '$Date', '$Text')");
	header("Location: ecrire.php");
}

mysqli_close($conexion);

?>