<?php
require_once 'componentes/conexion.php';
  
$paquetes = $conexion->query("SELECT * FROM paquete WHERE paquete.disponible=1;");
?>


<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <title>Agencia de viajes</title>

    
</head>

<body class="bg-light">
  
  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
  <div class="container">
    <a class="navbar-brand text-success fw-bold" href="#">ViajesExpress</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false">
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

  <div class="container py-5">
    <div class="row row-cols-2 row-cols-md-3 justify-content-center g-4">
       <div class="col-md 6 col-lg-4 mb-4">
          <div class="d-flex flex-column">
      <?php foreach($paquetes as $paquete) { ?>
            <div class="card">
                <div class="card-tittle">
                    <h3><?=$paquete['nombre']?></h3>
                </div>
                <div class="card-body">
                  
                  <p><?=$paquete['descripcion_corta']?></p>
                </div>
                <div class="card-footer"></div>
            </div>
            <?php } ?>
        </div>
  </div>

</body>
</html>