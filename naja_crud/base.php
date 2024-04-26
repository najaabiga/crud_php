<!doctype html>
<html lang="es">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
 <title>PHP_crud</title>

 <style>
  a{
    outline: none;
    text-decoration: none;
    color: white;
  }
 </style>
  </head>
  <body>

    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
          <h5 class="text-white h4">D'antojitos</h5>
          <span class="text-muted">Registro de clientes.</span>
        </div>
      </div>
      <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </nav>
     <br><br>

     
     <form class="row g-3" action="insertar.php" method="POST">

      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="nombre">
      </div>

      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Apellido</label>
        <input type="text" class="form-control" name="apellido">
      </div>
    
      <div class="col-md-6">
        <label for="inputCity" class="form-label">Telefono</label>
        <input type="text" class="form-control" name="telefono">
      </div>
     
      </div>
      <div class="col-md-2">
        <label for="inputEmail4" class="form-label">Correo</label>
        <input type="email" class="form-control" name="correo">
      </div>

      <div class="col-12">
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
    </form>
<br><br>

     <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Telefono</th>
      <th scope="col">Correo</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead> 
  <!-- <tbody>
    <td>
      <button class="btn btn-small btn-marning"><i class="fa-solid fa-pen-to-square"></i></button>
      <button class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></button>
    </td>
  </tbody> -->

  
<?php
include_once 'conexion.php';
// $id= $_POST['id'];

$query= "SELECT * FROM cliente";

$data= mysqli_query($mysqli, $query);

$total= mysqli_num_rows($data);

if($total!=0){
    while($row= mysqli_fetch_assoc($data)){
    echo "<tr> <td>" . $row['id'] . "</td> 
    <td>" . $row['nombre'] . "</td> 
    <td>" . $row['apellido'] . "</td>
    <td>" . $row['telefono'] . "</td> 
    <td>" . $row['correo'] . "</td> .
    <td> 
    <button class='btn btn-small btn-warning'><a href='update.php?act=$row[id]'>actualizar
    <i class='fa-solid fa-pen-to-square'></i></a></button>
    <button class='btn btn-small btn-danger'><a href='delete.php?rn=$row[id]'>Delete<i class='fa-solid fa-trash'></i></a></button>
    </td></tr>";

    }
}
?>
</table>

  </body>
</html>