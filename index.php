<?php
require_once 'componentes/conexion.php';

$paquetes = $conexion->query("SELECT * FROM `paquete` WHERE 1 ");

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
      <?php foreach ($paquetes as $paquete){ ?>
        <div class="col-md 6 col-lg-4 mb-4">
          <div class="d-flex flex-column">
            <div class="card">
                <div class="card-tittle">
                    <h3><?=$paquete['nombre']?></h3>
                </div>
                <div class="card-body">
                  
                  <p><?=$paquete['descripcion_corta']['descripcion_larga']?></p>
                </div>
                <div class="card-footer"></div>
            </div>
        </div>
  </div>
    <?php }?>
    
      

    
   
    

      
     
    <!-- Menú -->
    <nav class="navbar bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#inicio">Agencia de viajes</a>
    
        <button class="btn btn-outline-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#menuDerecha" aria-controls="menuDerecha">
          <span>☰</span>
        </button>
      </div>
    </nav>
   


        <h6>Garantizá tu descanso</h6>
    </div><div class="offcanvas offcanvas-end" tabindex="-1" id="menuDerecha" aria-labelledby="menuDerechaLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="menuDerechaLabel">Menú</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Cerrar"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#inicio">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#pie">Contacto</a>
          </li>
        </ul>
      </div>
    </div>

    <!-- Contenido -->
      
    <!-- Pie de página -->
    <footer id="pie" class="bg-light text-center py-4">
        <h5><u>Contacto: 358-788-745</u></h5>
    </footer>

 
</body></html>