<?php
session_start();
include('includes/conexion.php');

// Obtener datos del formulario
$id = $_POST['id'];
$cantidad = $_POST['cantidad'];

// Consultar el producto
$query = $conn->prepare("SELECT * FROM productos WHERE id = ?");
$query->bind_param("i", $id);
$query->execute();
$result = $query->get_result();
$producto = $result->fetch_assoc();

if ($producto) {
    // Crear el item del carrito
    $item = [
        'id' => $producto['id'],
        'nombre' => $producto['nombre'],
        'precio' => $producto['precio'],
        'cantidad' => $cantidad,
        'subtotal' => $producto['precio'] * $cantidad
    ];

    // Agregar al carrito (usando la sesión)
    $_SESSION['carrito'][] = $item;

    // Redirigir al carrito o mostrar mensaje de éxito
    header("Location: carrito.php");
    exit;
} else {
    echo "Producto no encontrado.";
}
?>
