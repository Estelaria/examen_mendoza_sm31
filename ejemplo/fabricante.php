<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous"/>
    <title>fabricante</title>
</head>

<body>
    
    
    <H1>crear fabricantes</H1>
    <!-- cod de formulario-->
    <form action="registrofabricante.php" method="POST">
        <!--se le agrega accion para que la info se ande a registrofrabricante.php-->
        <div class="mb-3">
          <label class="form-label">Ingresa el nombre del abricante</label> <!--ingresa la lectura que se muestra en pantalla-->
          <input type="text" class="form-control" name="nomfabricante"> 
           <!--nombre de la variable tiene el name y value manda el valor que se queda como constante-->
          <!-- el name es una variable y el value una constante--> 
        </div>
        <input type="submit" name="enviar" value="insertar fabricante" class="btn btn-primary"/>
      </form>
     <!--inicio de la tabla--> 
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Fabricante</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
    <!-- Conexion a la BD-->
    <?php
      include('conec.php');
      $consulta="SELECT * FROM fabricante";
      $resultado=mysqli_query($conexion,$consulta); 
      while($fila=mysqli_fetch_array($resultado)){
    ?>
    <tr>
      <th scope="row"> <?php echo $fila["codigo"]?></th>
      <td> <?php echo $fila["nombre"] ?> </td>
      <td> <a target="_self" href="acciones/eliminarFabricante.php?idFab=<?php echo $fila["codigo"]?>" name="id">Basurero</a> </td>
    </tr>
    <?php } ?>
</tbody>
</table>
     <!--fin de la tabla-->

     <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
      crossorigin="anonymous"></script>
</body>
</html>