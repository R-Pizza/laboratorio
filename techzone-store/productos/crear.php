<?php
include '../auth/verificar.php';
include '../config/conexion.php';

if(isset($_POST['guardar'])) {

    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $descripcion = $_POST['descripcion'];

    $sql = "INSERT INTO productos(nombre, precio, cantidad, descripcion)
            VALUES('$nombre','$precio','$cantidad','$descripcion')";

    mysqli_query($conn, $sql);

    header('Location: listar.php');
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Crear Producto</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="sopa.css">
</head>
<body>

<div class="container mt-5">

<h2>Nuevo Producto</h2>

<form method="POST">

<div class="mb-3">
<label>Nombre</label>
<input type="text" name="nombre" class="form-control" required>
</div>

<div class="mb-3">
<label>Precio</label>
<input type="number" step="0.01" name="precio" class="form-control" required>
</div>

<div class="mb-3">
<label>Cantidad</label>
<input type="number" name="cantidad" class="form-control" required>
</div>

<div class="mb-3">
<label>Descripción</label>
<textarea name="descripcion" class="form-control"></textarea>
</div>

<button type="submit" name="guardar" class="btn btn-primary">
Guardar
</button>

<a href="listar.php" class="btn btn-secondary">
Volver
</a>

</form>

</div>

</body>
</html>