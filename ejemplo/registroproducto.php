<?php
//se envia el isset//
include('conec.php');
if(isset($_POST['agregar'])){
    $nomproducto= $_POST['nomProducto'];
    $precio = $_POST['precio'];
    $codfabricante=$_POST['codFabricante'];
    //consulta mysql//
    $insertarproducto= "INSERT INTO producto(nombre,precio,codigo_fabricante) 
    VALUE ('$nomproducto','$precio','$codfabricante')";
    $resultados=mysqli_query($conexion,$insertarproducto);
    //mensaje si no se ingresa valores//
    if (!$resultados){
        echo '<script> alert ("los datos no se insertador") </script>';
        header('location: index.html');
    //redireccionamiento//
    } else {
        echo '<script> alert("los datos se insertador") </script>';
    }
}
header('location: index.html');
    //redireccionamiento//
?>