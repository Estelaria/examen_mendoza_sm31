<?php
//datos de la BD
$hostname='localhost';
$username='root';
$password='';
$database='tienda';
$conexion=mysqli_connect($hostname,$username,$password,$database);
//valida la conexion de la BD
if(mysqli_connect_error()){
    echo 'conexion fallida';
    
}
else{
    echo 'conexion exitosa';
}

?>