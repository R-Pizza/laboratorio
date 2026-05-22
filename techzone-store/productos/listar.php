<?php
include '../auth/verificar.php';
include '../config/conexion.php';

$sql = "SELECT * FROM productos";
$resultado = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Productos</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/sopa.css">
</head>
<body>

<div class="container mt-5">

<h2>Lista de Productos</h2>

<a href="crear.php" class="btn btn-success mb-3">
Nuevo Producto
</a>

<table class="table table-bordered table-striped">
<thead>
<tr>
<th>ID</th>
<th>Nombre</th>
<th>Precio</th>
<th>Cantidad</th>
<th>Descripción</th>
<th>Acciones</th>
</tr>
</thead>
<tbody>

<?php while($fila = mysqli_fetch_assoc($resultado)) { ?>
<tr>
<td><?php echo $fila['id']; ?></td>
<td><?php echo $fila['nombre']; ?></td>
<td><?php echo $fila['precio']; ?></td>
<td><?php echo $fila['cantidad']; ?></td>
<td><?php echo $fila['descripcion']; ?></td>
<td>
<a href="editar.php?id=<?php echo $fila['id']; ?>" class="btn btn-warning btn-sm">
Editar
</a>

<a href="eliminar.php?id=<?php echo $fila['id']; ?>"
class="btn btn-danger btn-sm"
onclick="return confirm('¿Eliminar producto?')">
Eliminar
</a>
</td>
</tr>
<?php } ?>

</tbody>
</table>

</div>

</body>
</html>