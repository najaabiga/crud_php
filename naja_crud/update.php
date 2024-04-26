<!doctype html>
<html>
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


    <?php
    
    include_once 'actualizar.php';

    $id=$_GET['act'];

    $sql= "SELECT * FROM cliente WHERE id= '$id'";
  
    $result= mysqli_query($mysqli, $sql);
    $esultCheck= mysqli_num_rows($result);

    if ($resultCheck > 0){
        $row = mysqli_fetch_assoc($result);
        $nombre = $row['nombre'];
        $apellido = $row['apellido'];
        $telefono = $row['telefono'];
        $correo = $row['correo'];
    }

    ?>
<form action="actualizar.php" Method="POST">

<input type="text" name="id" placeholder="id cliente" value="<?php echo $id ?>">
<br><br>
<input type="text" name="nombre" placeholder="nombre cliente" value="<?php echo $nombre ?>">
<br><br>
<input type="text" name="apellido" placeholder="apellido cliente" value="<?php echo $apellido ?>">
<br> <br> 
<input type="text" name="telefono" placeholder="telefono cliente" value="<?php echo $telefono ?>">
<br><br>
<input type="text" name="correo" placeholder="correo cliente" value="<?php echo $correo ?>">
<br> <br>
<button type= "submit" name="Editar">Guardar</button>
<br><br>

</form>
    </body>
</html>