<?php

$host = "localhost";
$usuario = "root";
$password = "";
$basedatos = "techzone";

$conn = mysqli_connect($host, $usuario, $password, $basedatos);

if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}

?>