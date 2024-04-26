<?php
$mysqli = new mysqli("localhost","root", "", "naja_crud");
if ($mysqli->connect_errno){
    echo "fallo al conectr a MySQL: (". $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

?>