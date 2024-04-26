<?php
include_once 'conexion.php';
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];

$sqlinsert = "INSERT INTO cliente values (0,'$nombre', '$apellido', '$telefono', '$correo')";

mysqli_query($mysqli, $sqlinsert);
//echo $sqlinsert

header("location:./base.php?insert=succes");
//C:\Users\najav\OneDrive\Documentos\conexionPHP\index.php

?>