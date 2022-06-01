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
    <!--agregar url para icono de boostrap-->
     <title>Productos</title>
</head>
<body>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <H1> Ingrese producto</H1>
    <!--agregar formulario-->
    <form action="registroproducto.php" method="POST">
      <?php
      ?>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">nombre</label>
            <input type="text" class="form-control" placeholder="nombre de producto" name="nomProducto">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">precio</label>
            <input type="text" class="form-control" placeholder="precio del producto" name="precio">
          </div>
          <div class="mb-3">
            <!--desplegable-->
            <label class="form-label"> ingresa fabricante</label>
            <select class="form-select" aria-label="Default select example" name="codFabricante">
              <option selected>Ingrese el fabricante</option>
              <?php
              //conectar a la base de datos//
              include('conec.php');

              $consulta2="SELECT*FROM fabricante";
              $resultado2=mysqli_query($conexion,$consulta2);
              while($fila2=mysqli_fetch_array($resultado2)){
              ?>
              <option value="<?php echo $fila2["codigo"]?>"><?php echo
              $fila2["nombre"] ?></option>
              <?php } ?>
              </select>
          </div>
          
        <input type="submit" name="agregar" value="insertar producto" class="btn btn-primary"></input>
      </form>
      <!--inicio de la tabla--> 
<table class="table">
  <thead>
    <tr>
      <!-- encabezado de la tabla-->
      <th scope="col">#</th>
      <th scope="col">Producto</th>
      <th scope="col">precio</th>
      <th scope="col">codigo fabricante</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
    <!-- Conexion a la BD-->
    <?php
  
  // esta conslta solo muestra todos los elementos de la tabla producto//
  // $consulta="SELECT * FROM producto"; //

  //esta consulta muestra los elementos con el nombre del fabricante//
  $consultad="SELECT producto.codigo,producto.nombre, producto.precio, fabricante.nombre AS fabricante FROM producto
  INNER JOIN fabricante ON producto.codigo_fabricante = fabricante.codigo";
  $resultado=mysqli_query($conexion,$consultad); 
    while($fila=mysqli_fetch_array($resultado)){
  ?>
  
    <tr>
      <!--muestra la numeracion en fila-->
      <th scope="row"> <?php echo $fila["codigo"]?></th>
      <td> <?php echo $fila["nombre"] ?> </td>
      <td> <?php echo $fila["precio"] ?> </td>
     <!-- <td> <?php echo $fila["codigo_fabricante"] ?> </td> solo muestra el codigo_fab-->
      <td> <?php echo $fila["fabricante"] ?> </td>
      <td> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
      </svg>
        <a target="_self" href="acciones/eliminarProducto.php?idProducto=<?php echo $fila["codigo"]?>" name="id">Basurero</a> </td>
    </tr>
 <?php } ?>
  </tbody>
</table>
     <!--fin de la tabla-->
</body>
</html>