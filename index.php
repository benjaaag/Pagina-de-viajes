<?php
require_once 'componentes/conexion.php';

$paquetes = $conexion->query("SELECT * FROM paquete WHERE paquete.disponible=1;");
echo "CONSULTA EXITOSA";
?>


<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <title>Agencia de viajes</title>

    
</head>

<body class="bg-light">

  <div class="container py-5">
    <div class="row row-cols-1 row-cols-md-2 justify-content-center g-4">
      <?php foreach($paquetes as $paquete){ ?>
        <div class="col d-flex justify-content-center">
          <div class="card text-center shadow-lg" style="width: 18rem;">
            <div class="card-header">
              <h3 class="h5 mb-0"><?=$paquete['nombre']?></h3>
            </div>
            <div class="card-body">
              <p class="card-text"><?=$paquete['descripcion_corta']?></p>
            </div>
            <div class="card-footer text-muted">
              Más info
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>

</body>
</html>