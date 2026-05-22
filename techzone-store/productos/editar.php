<?php
include '../auth/verificar.php';
include '../config/conexion.php';

$id = $_GET['id'];

$sql = "SELECT * FROM productos WHERE id='$id'";
$resultado = mysqli_query($conn, $sql);
$producto = mysqli_fetch_assoc($resultado);

if(isset($_POST['actualizar'])) {

    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $descripcion = $_POST['descripcion'];

    $update = "UPDATE productos SET
                nombre='$nombre',
                precio='$precio',
                cantidad='$cantidad',
                descripcion='$descripcion'
                WHERE id='$id'";

    mysqli_query($conn, $update);

    header('Location: listar.php');
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Editar</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

<h2>Editar Producto</h2>

<form method="POST">

<div class="mb-3">
<label>Nombre</label>
<input type="text" name="nombre" class="form-control"
value="<?php echo $producto['nombre']; ?>">
</div>

<div class="mb-3">
<label>Precio</label>
<input type="number" step="0.01" name="precio" class="form-control"
value="<?php echo $producto['precio']; ?>">
</div>

<div class="mb-3">
<label>Cantidad</label>
<input type="number" name="cantidad" class="form-control"
value="<?php echo $producto['cantidad']; ?>">
</div>

<div class="mb-3">
<label>Descripción</label>
<textarea name="descripcion" class="form-control"><?php echo $producto['descripcion']; ?></textarea>
</div>

<button type="submit" name="actualizar" class="btn btn-primary">
Actualizar
</button>

</form>

</div>

</body>
</html>