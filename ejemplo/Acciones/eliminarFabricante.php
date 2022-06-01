<?php
include('../conec.php');

$codigoFabricante=$_GET['idFab'];
$eliminarFabricante="DELETE FROM fabricante WHERE codigo = '$codigoFabricante'";
$resultado=mysqli_query($conexion,$eliminarFabricante);
header('Location: ../fabricante.php');

?>