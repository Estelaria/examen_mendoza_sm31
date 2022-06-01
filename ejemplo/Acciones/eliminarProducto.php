<?php
include('../conec.php');

$codigoProducto=$_GET['idProducto'];
$eliminarProducto="DELETE FROM producto WHERE codigo = '$codigoProducto'";
$resultado=mysqli_query($conexion,$eliminarProducto);
header('Location: ../productos.php');

?>|