<?php
include('includes/conexion.php');

// Consultar productos de la base de datos
$query = "SELECT * FROM productos";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos - Tienda Evangelis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Navegación -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.php">Tienda Evangelis</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="productos.php">Productos</a></li>
                    <li class="nav-item"><a class="nav-link" href="contacto.php">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Lista de Productos -->
    <div class="container mt-5">
        <h1 class="mb-4 text-center">Nuestros Productos</h1>
        <div class="row">
            <?php while ($producto = $result->fetch_assoc()): ?>
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm h-100">
                        <img src="img/<?php echo $producto['imagen']; ?>" class="card-img-top" alt="<?php echo $producto['nombre']; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $producto['nombre']; ?></h5>
                            <p class="card-text"><?php echo $producto['descripcion']; ?></p>
                            <p class="text-primary fw-bold">₡<?php echo number_format($producto['precio'], 0); ?></p>
                            <a href="detalle_producto.php?id=<?php echo $producto['id']; ?>" class="btn btn-outline-primary">Ver Detalles</a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4">
        <p>&copy; 2024 Tienda Evangelis. Todos los derechos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
