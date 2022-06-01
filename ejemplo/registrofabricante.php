<?php
include("conec.php");
if (isset($_POST['enviar'])){
    //si se enviar (isset) se hace lo siguiente//
    $nomfabricante = $_POST['nomfabricante'];
    $insertarfabricante=
    "INSERT INTO fabricante(nombre) VALUE ('$nomfabricante')";
    $resultado=mysqli_query($conexion,$insertarfabricante);
    if (!$resultado){
        echo '<script> alert("los datos no se insertaron") </script>';
        header('location: index.html');
    //redireccionamiento//
    } else {
        echo '<script> alert("los datos se insertador") </script>';
    }
    header('location: index.html');
}
    //redireccionamiento//
?>