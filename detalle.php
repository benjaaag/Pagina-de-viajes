<?php
require_once 'componentes/conexion.php';

// Obtener el ID del paquete
$id_paquete = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($id_paquete > 0) {
    $consulta = "
        SELECT id_paquete, nombre, descripcion_corta, descripcion_larga,
               precio, limite_personas, personas_reservadas,
               fecha_inicio, fecha_fin, estado, imagen
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
    <title><?php echo htmlspecialchars($paquete['nombre']); ?> | AVOLARI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
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
        .paquete-img {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }
        .tag {
            background-color: #007bff;
            color: white;
            padding: 3px 10px;
            border-radius: 15px;
            font-size: 0.85rem;
            margin-right: 5px;
        }
        .tag-danger {
            background-color: #dc3545;
        }
        .btn-reserva {
            background-color: #28a745;
            color: white;
            font-weight: bold;
            border: none;
            border-radius: 10px;
            transition: 0.3s;
        }
        .btn-reserva:hover {
            background-color: #218838;
        }
        .btn-volver {
            background-color: #6c757d;
            color: white;
            border: none;
            border-radius: 10px;
        }
        footer {
            text-align: center;
            color: #777;
            font-size: 0.9rem;
            margin-top: 40px;
        }
    </style>
</head>
<body>

<main class="container py-5">
    <div class="paquete-card mx-auto">
        <!-- Imagen -->
        <img src="imagenes/<?php echo htmlspecialchars($paquete['imagen']); ?>" 
             class="paquete-img" 
             alt="Imagen del paquete">

        <!-- Contenido -->
        <div class="p-4">
            <h2 class="fw-bold text-primary mb-3"><?php echo htmlspecialchars($paquete['nombre']); ?></h2>

            <!-- Etiquetas -->
            <div class="mb-3">
                <span class="tag">Familia</span>
                <span class="tag">5 días</span>
                <span class="tag tag-danger">Lugares disponibles: <?php echo $lugares_disponibles; ?></span>
            </div>

            <!-- Descripción -->
            <p class="fw-semibold text-muted"><?php echo htmlspecialchars($paquete['descripcion_corta']); ?></p>
            <p><?php echo nl2br(htmlspecialchars($paquete['descripcion_larga'])); ?></p>

            <!-- Servicios -->
            <h5 class="mt-4">Servicios incluidos:</h5>
            <ul>
                <li>Estadía en hotel con vista a las montañas.</li>
                <li>Desayuno incluido.</li>
                <li>Excursión guiada y actividades recreativas.</li>
                <li>Traslado aeropuerto - hotel - aeropuerto.</li>
            </ul>

            <h4 class="text-success mt-4">USD <?php echo number_format($paquete['precio'], 2, '.', ','); ?></h4>

            <!-- Botones -->
            <div class="d-flex justify-content-center mt-4 gap-3">
                <a href="comprar.php?id=<?php echo $paquete['id_paquete']; ?>" class="btn btn-reserva px-5 py-2">
                    ¡RESERVÁ AHORA!
                </a>
                <a href="index.php" class="btn btn-volver px-5 py-2">Volver</a>
            </div>
        </div>
    </div>
</main>

<footer>
    © 2025 Agencia de Viajes | <strong>AVOLARI</strong> | Monte Cristo, Córdoba
</footer>

</body>
</html>
