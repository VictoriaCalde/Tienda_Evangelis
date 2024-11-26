<?php
include('includes/conexion.php');

// Obtener el ID del producto desde la URL
$id = $_GET['id'] ?? 0;

// Consultar el producto de la base de datos
$query = $conn->prepare("SELECT * FROM productos WHERE id = ?");
$query->bind_param("i", $id);
$query->execute();
$result = $query->get_result();
$producto = $result->fetch_assoc();

// Si no existe el producto, redirigir a la página de productos
if (!$producto) {
    header("Location: productos.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $producto['nombre']; ?> - Tienda Cocobeli</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navegación -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.php">Tienda Cocobeli</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="productos.php">Productos</a></li>
                    <li class="nav-item"><a class="nav-link" href="contacto.php">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Detalle del Producto -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <img src="img/<?php echo $producto['imagen']; ?>" class="img-fluid" alt="<?php echo $producto['nombre']; ?>">
            </div>
            <div class="col-md-6">
                <h1><?php echo $producto['nombre']; ?></h1>
                <p><?php echo $producto['descripcion']; ?></p>
                <p class="text-primary fw-bold fs-4">₡<?php echo number_format($producto['precio'], 0); ?></p>

                <!-- Agregar al Carrito -->
                <form action="carrito.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $producto['id']; ?>">
                    <div class="mb-3">
                        <label for="cantidad" class="form-label">Cantidad:</label>
                        <input type="number" name="cantidad" id="cantidad" class="form-control" value="1" min="1">
                    </div>
                    <button type="submit" class="btn btn-primary">Agregar al Carrito</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
