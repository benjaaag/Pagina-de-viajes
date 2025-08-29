<?php
require_once 'componentes/conexion.php';

$paquetes = $conexion->query("");

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

<body id="inicio">
  
     
    <!-- Menú -->
    <nav class="navbar bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#inicio">Agencia de viajes</a>

        <button class="btn btn-outline-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#menuDerecha" aria-controls="menuDerecha">
          <span>☰</span>
        </button>
      </div>
    </nav>

    <!-- Menú offcanvas -->
    <div class="container mt-4">
        <h1 class="text-center">Buscador con PHP + Bootstrap</h1>
        <form action="resultados.php" method="GET" class="d-flex justify-content-center mb-5">
            <input type="text" name="q" class="form-control w-50" placeholder="Escribe algo para buscar..." required="">
            <button type="submit" class="btn btn-primary ms-2">Buscar</button>
        </form>

        <div class="card mb-1" style="width: 18rem;">
            <img src="https://www.educ.ar/uploads/resources/images/brazil-4803308-1280_20250305112533.jpg" class="card-img-top" alt="...">
            <div class="card-body1">
                <h5 class="card-title">Viaje a Brasil ¡HOT SALE!</h5>
                <p class="card-text">El mejor viaje de tu vida</p>
                <a href="#" class="btn btn-primary">COMPRAR</a>
            </div>
        </div>

        <div class="card mb-2" style="width: 18rem;">
            <img src="https://s3.ivisa.com/website-assets/blog/suiza-nature-view-skies-travel.webp" class="card-img-top" alt="...">
            <div class="card-body2">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <div class="card mb-3" style="width: 18rem;">
            <img src="https://media.pilaradiario.com/p/0c8167954db78d5d4f39954ba7ef4f81/adjuntos/352/imagenes/100/117/0100117010/790x0/smart/india-adoptara-el-nombre-bharat-sprusoncomwebp.png" class="card-img-top" alt="...">
            <div class="card-body3">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

        <div class="card mb-4" style="width: 18rem;">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTYyIqIiL3d-iCdFqyZti-zERDNozduQQl7gQ&s" class="card-img-top" alt="...">
            <div class="card-body4">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>


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