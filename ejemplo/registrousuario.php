<?php
//se conecta//
include('conec.php');
//se envia el isset//
if(isset($_POST['agregardos'])){
    $nomusua= $_POST['nomUsu'];
    $Apaterno = $_POST['ApeMa'];
    $Amaterno=$_POST['ApeMa'];
    $telep=$_POST['Tel'];
    $correos=$_POST['correo'];
    $usua=$_POST['usuario'];
    $contra=$_POST['contraseña'];
    //consulta mysql para agregar datos//
    $insertarusuario= "INSERT INTO usuario(Nombre,Apellido_pa,Apellido_Ma,
    Telefono,Correo,Usuario,Contraseña) 
    VALUE ('$nomusua','$Apaterno','$Amaterno','$telep','$correos','$usua','$contra')";
    $resultadodod=mysqli_query($conexion,$insertarusuario);
    if (!$resultadodos){
        echo '<script> alert ("los datos no se insertador") </script>';
        header('location: index.html');
    //redireccionamiento//
    } else {
        echo '<script> alert("los datos se insertador") </script>';
    }
}
header('location: index.html')

?>