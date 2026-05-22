<?php
include 'auth/verificar.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Dashboard</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/hola.css">
</head>
<body>

<nav class="navbar navbar-dark bg-dark">
<div class="container-fluid">
<span class="navbar-brand">TechZone Store</span>

<div>
<a href="productos/listar.php" class="btn btn-success">
Productos
</a>

<a href="logout.php" class="btn btn-danger">
Cerrar sesión
</a>
</div>
</div>
</nav>

<div class="container mt-5">
<div class="alert alert-primary">
Bienvenido <?php echo $_SESSION['usuario']; ?>
</div>
</div>

</body>
</html>