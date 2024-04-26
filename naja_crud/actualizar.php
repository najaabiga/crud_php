
<?php

 include_once 'conexion.php';
// $id = $_POST['id'];

if(isset($_POST['Editar'])){

    $id = $_POST['id'];

    $query = "UPDATE 'cliente' SET nombre='{$_POST['nombre']}',apellido='{$_POST['apellido']}',telefono='{$_POST['telefono']}', correo='{$_POST['correo']}' where id='{$_POST['id']}'";
    mysqli_query($mysqli, $query);
   
}


header("location:./base.php?insert=success");
?>

