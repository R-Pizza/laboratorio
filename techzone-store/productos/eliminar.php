<?php
include '../auth/verificar.php';
include '../config/conexion.php';

$id = $_GET['id'];

$sql = "DELETE FROM productos WHERE id='$id'";
mysqli_query($conn, $sql);

header('Location: listar.php');
?>