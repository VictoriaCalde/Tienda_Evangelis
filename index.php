<?php include('includes/conexion.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Cocobeli</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Navegación -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="index.php">Tienda Evangelis</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="productos.php">Productos</a></li>
                    <li class="nav-item"><a class="nav-link" href="contacto.php">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Carrusel -->
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/hero-1.png" class="d-block w-100" alt="Moda 1">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-4 text-white">Descubre nuestra nueva colección</h1>
                    <p class="lead">Ropa de mujer para cada ocasión.</p>
                    <a href="productos.php" class="btn btn-primary btn-lg">Ver Productos</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/hero-2.png" class="d-block w-100" alt="Moda 2">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-4 text-white">Promociones Especiales</h1>
                    <p class="lead">Aprovecha descuentos únicos por tiempo limitado.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/hero-3.png" class="d-block w-100" alt="Moda 2">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-4 text-white">Viste a la moda y sientete unica</h1>
                    <p class="lead">Aprovecha los mejores precios del mercado.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>

    <!-- Productos Destacados -->
    <section class="container py-5">
        <h2 class="text-center mb-4">Productos Destacados</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="img/vestido_floral.png" class="card-img-top" alt="Vestido Floral">
                    <div class="card-body">
                        <h5 class="card-title">Vestido Floral</h5>
                        <p class="card-text">Perfecto para los días soleados.</p>
                        <p class="text-primary fw-bold">₡15,000</p>
                        <a href="productos.php" class="btn btn-outline-primary">Comprar Ahora</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="img/falda_plisada.png" class="card-img-top" alt="Falda Plisada">
                    <div class="card-body">
                        <h5 class="card-title">Falda Plisada</h5>
                        <p class="card-text">Añade estilo a tu outfit diario.</p>
                        <p class="text-primary fw-bold">₡10,000</p>
                        <a href="productos.php" class="btn btn-outline-primary">Comprar Ahora</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="img/pantalon_cargo.png" class="card-img-top" alt="Pantalón Cargo">
                    <div class="card-body">
                        <h5 class="card-title">Pantalón Cargo</h5>
                        <p class="card-text">Comodidad y estilo en un solo pantalón.</p>
                        <p class="text-primary fw-bold">₡14,000</p>
                        <a href="productos.php" class="btn btn-outline-primary">Comprar Ahora</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4">
        <div class="container">
            <p>&copy; 2024 Tienda Cocobeli. Todos los derechos reservados.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
