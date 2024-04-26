<?php

include_once 'conexion.php';

$id = $_GET['rn'];
$query= "DELETE FROM cliente WHERE id = '$id'";

$data= mysqli_query($mysqli, $query);
header("location:./base.php?insert=succes");
?>