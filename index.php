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

<body>
   
  
    <div class="row row-cols-2 row-cols-md-3 g-3">
      <?php foreach($paquetes as $paquete){ ?>
        <div class="col-md 6 col-lg-4 mb-4">
          <div class="d-flex flex-column">
            <div class="card">
                <div class="card-tittle">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR7jz4nUXiCe1_-3QxCEua0oyRYH8npNdhGjQ&s" alt="">
                    <h3><?=$paquete['nombre']?></h3>
                </div>
                <div class="card-body">
                  
                  <p><?=$paquete['descripcion_corta']?></p>
                  <p>comprar</p>
                </div>
                <div class="card-footer"></div>
            </div>
        </div>
  </div>
    <?php }?>
</body>
</html>