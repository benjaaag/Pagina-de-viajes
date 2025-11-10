<?php
session_start();
require_once 'componentes/conexion.php';
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['ingresar'])){
    $errores = '';
    $correo = $conexion->real_escape_string(string: $_POST['usuario']);
    $contrasenia = $conexion->real_escape_string(string: $_POST['contrasenia']);
}
    
    /*Cuando se aprieta iniciar sesion, se limpian los campos donde pusiste los datos */
// Simulación de login simple
if (isset($_POST['usuario']) && isset($_POST['password'])) {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    // Usuario de ejemplo
    if ($usuario == "cliente" && $password == "1234") {
        $_SESSION['usuario'] = $usuario;
        header("Location: carrito.php"); 
        exit;
    } else {
        $error = "Usuario o contraseña incorrectos";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Iniciar Sesión - ViajesExpress</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <div class="w-50 mx-auto bg-white p-4 shadow rounded">
        <h2  class="text-center mb-4">Iniciar Sesión</h2>
    

        <?php if(isset($error)): ?>
        <div class="alert alert-danger text-center"><?= $error ?></div>
        <?php endif; ?>

        <form method="POST" action="login.php">
            
        </form>
        <?php require_once 'componentes/comp-form-login.php' ?>
    </div>
</div>

</body>
</html>