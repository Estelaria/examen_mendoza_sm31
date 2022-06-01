<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
      crossorigin="anonymous">
    <title>Usuario</title>
</head>
<body>
    <!-----------------------Agregar formulario-------------------------->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <H1> Ingrese los siguientes datos</H1>
    <!--agregar formulario-->
    <form action="registrousuario.php" method="POST">
      
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre</label>
            <input type="text" class="form-control" placeholder="Nombre" name="nomUsu">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Apellido Paterno</label>
            <input type="text" class="form-control" placeholder="Apellido Paterno" name="ApePa">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Apellido Materno</label>
            <input type="text" class="form-control" placeholder="Apellido Materno" name="ApeMa">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">telefono</label>
            <input type="text" class="form-control" placeholder="Telefono" name="Tel">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Correo</label>
            <input type="text" class="form-control" placeholder="example@email.com" name="correo">
          </div>
          <div class="mb-3">
            <label for="text" class="form-label">Usuario</label>
            <input type="text" class="form-control" placeholder="Usuario" name="usuario">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Contraseña</label>
            <input type="password" class="form-control" placeholder="Contraseña" name="contraseña">
          </div>
          <!--boton-->
          <input type="submit" name="agregardos" value="insertar usuario" class="btn btn-primary"></input>
        </form>
        <!------------------fin de formulario-------------------------->
          <!--Insertar tabla para visualizar-->
          <table class="table">
            <thead>
              <tr>
                <!-- encabezado de la tabla-->
                <th scope="col">Nomrbre</th>
                <th scope="col">Apellido Paterno</th>
                <th scope="col">Apellido Materno</th>
                <th scope="col">Telefono</th>
                <th scope="col">Correo</th>
                <th scope="col">Uusario</th>
                <th scope="col">Contraseña</th>
              </tr>
            </thead>
          <tbody>
  <!--conectar a la base de datos-->
 <!-- Conexion a la BD-->
 <?php
      include('conec.php');
      $consultatres="SELECT * FROM usuario;";
      $resultadotres=mysqli_query($conexion,$consultatres); 
      while($filatres=mysqli_fetch_array($resultadotres)){
    ?>
    <tr>

      <th scope="row"> <?php echo $filatres["Nombre"]?></th>
        <td> <?php echo $filatres["Apellido_Pa"] ?> </td>
        <td> <?php echo $filatres["Apellido_Ma"] ?> </td>
        <td> <?php echo $filatres["Telefono"]?></td>
        <td> <?php echo $filatres["Correo"] ?> </td>
        <td> <?php echo $filatres["Usuario"] ?> </td>
        <td> <?php echo $filatres["Contraseña"] ?> </td>
    </tr>
    <?php } 
    ?>
</tbody>
</table>
     <!--fin de la tabla-->
</body>
</html>