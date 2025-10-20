<?php
session_start();

// Simulación de paquetes
$paquetes = [
    1 => ["titulo" => "Caribe - 7 noches", "precio" => 1200],
    2 => ["titulo" => "Bariloche - 5 noches", "precio" => 800],
    3 => ["titulo" => "Salta - 4 noches", "precio" => 600]
];

// Inicializar carrito
if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}

// Agregar producto al carrito
if (isset($_GET['agregar'])) {
    $id = (int) $_GET['agregar'];
    if (isset($paquetes[$id])) {
        $_SESSION['carrito'][] = $paquetes[$id];
    }
}

// Vaciar carrito
if (isset($_GET['vaciar'])) {
    $_SESSION['carrito'] = [];
}

$total = 0;
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Carrito de Compras</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container py-5">
    <h1 class="text-center mb-4">Carrito de Compras</h1>
    <?php if (empty($_SESSION['carrito'])): ?>
        <div class="text-center">
            <p>Tu carrito está vacío.</p>
            <a href="index.php" class="btn btn-success mt-3">Volver al Inicio</a>
        </div>
    <?php else: ?>
        <table class="table table-bordered text-center">
            <thead class="table-success">
                <tr>
                    <th>Paquete</th>
                    <th>Precio</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($_SESSION['carrito'] as $item): ?>
                    <tr>
                        <td><?= $item['titulo'] ?></td>
                        <td>$<?= $item['precio'] ?></td>
                    </tr>
                    <?php $total += $item['precio']; ?>
                <?php endforeach; ?>
            </tbody>
        </table>

        <h3 class="text-end text-success mb-4">Total: $<?= $total ?></h3>

        <div class="d-flex justify-content-between flex-wrap gap-2">
            <a href="index.php" class="btn btn-success">Volver al Inicio</a>
            <a href="index.php" class="btn btn-secondary">Seguir Comprando</a>
            <a href="carrito.php?vaciar=true" class="btn btn-danger">Vaciar Carrito</a>
            <a href="#" class="btn btn-primary">Finalizar Compra</a>
        </div>
    <?php endif; ?>
</div>
</body>
</html>