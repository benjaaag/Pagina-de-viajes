<?php
session_start()
require_once 'componentes/conexion.php';
$paquetes = $conexion->query("SELECT * FROM paquete WHERE paquete.estado= 'Activo'; ")
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Agencia de viajes</title>
  <style>
    .card-img-top {
      height: 220px;
      object-fit: cover;
    }
  </style>
</head>
<body class="bg-light">

  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
    <div class="container">
      <a class="navbar-brand text-success fw-bold" href="#">Página de viajes</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link active" href="#">Inicio</a></li>
          <li class="nav-item"><a class="nav-link" href="#paquetes">Paquetes</a></li>
          <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
          <li class="nav-item"><a class="nav-link" href="#quienes">Quiénes somos</a></li>
          <li class="nav-item"><a class="nav-link text-success fw-bold" href="carrito.php">Carrito</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container py-5" id="paquetes">
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <?php foreach($paquetes as $paquete) { ?>
        <div class="col">
          <div class="card h-100 shadow-sm">
            <img src="imagen/<?=$paquete['Imagen']?>" class="card-img-top" alt="<?=$paquete['nombre']?>">
            <div class="card-body text-center">
              <h5 class="card-title"><?=$paquete['nombre']?></h5>
              <p class="card-text"><?=$paquete['descripcion_corta']?></p>
              <a href="detalle.php?id=<?=$paquete['id_paquete']?>" class="btn btn-success w-100">
                Comprar
              </a>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
