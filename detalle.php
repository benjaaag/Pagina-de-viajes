<?php
session_start();
require_once 'componentes/conexion.php';

// Obtener el ID del paquete
$id_paquete = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($id_paquete > 0) {
    $consulta = "
        SELECT id_paquete, nombre, descripcion_corta, descripcion_larga,
               precio, limite_personas, personas_reservadas, servicio_incluido,
               fecha_inicio, fecha_fin, estado, Imagen
        FROM paquete
        WHERE id_paquete = $id_paquete
    ";

    $resultado = $conexion->query($consulta);

    if ($resultado && $resultado->num_rows > 0) {
        $paquete = $resultado->fetch_assoc();
        $lugares_disponibles = $paquete['limite_personas'] - $paquete['personas_reservadas'];
    } else {
        echo "<div class='alert alert-danger text-center mt-4'>❌ Paquete no encontrado.</div>";
        exit;
    }
} else {
    echo "<div class='alert alert-danger text-center mt-4'>❌ ID de paquete inválido.</div>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php echo htmlspecialchars($paquete['nombre']); ?> | Agencia de Viajes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f5f5;
            font-family: "Segoe UI", sans-serif;
        }
        .paquete-card {
            max-width: 900px;
            background-color: #fff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0,0,0,0.15);
        }
        .banner-img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 25px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.18);
        }
    </style>
</head>
<body>

<main class="container py-5">
    <div class="paquete-card mx-auto p-4">

        <!-- Banner ancho con bordes redondos -->
        <img src="imagen/<?php echo htmlspecialchars($paquete['Imagen']); ?>" 
             alt="Imagen del paquete" 
             class="banner-img mb-4">

        <h2 class="fw-bold text-primary mb-3">
            <?php echo htmlspecialchars($paquete['nombre']); ?>
        </h2>

        <!-- Etiquetas -->
        <div class="mb-3">
            <span class="badge bg-primary">Paquete turístico</span>
            <span class="badge bg-warning text-dark">Lugares disponibles: <?php echo $lugares_disponibles; ?></span>
        </div>

        <!-- Descripción -->
        <p class="fw-semibold text-muted">
            <?php echo htmlspecialchars($paquete['descripcion_corta']); ?>
        </p>

        <p>
            <?php echo nl2br(htmlspecialchars($paquete['descripcion_larga'])); ?>
        </p>

        <!-- Servicios e imagen repetida como banner (tu pedido) -->
        <h4 class="mt-4">Servicios incluidos</h4>
        <p class="fw-semibold text-muted">
            <?php echo htmlspecialchars($paquete['descripcion_corta']); ?>
        </p>

        
        <!-- Precio -->
        <h3 class="text-success fw-bold">
            USD <?php echo number_format($paquete['precio'], 2, '.', ','); ?>
        </h3>

        <!-- Botones -->
        <div class="d-flex justify-content-center mt-4 gap-3">
            <a href="carrito.php?id=<?php echo $paquete['id_paquete']; ?>" 
               class="btn btn-success px-5 py-2 fw-bold">
                ¡RESERVAR!
            </a>

            <a href="index.php" class="btn btn-secondary px-5 py-2">
                Volver
            </a>
        </div>

    </div>
</main>

<footer class="text-center text-muted mt-4">
    © 2025 Agencia de Viajes
</footer>

</body>
</html>
