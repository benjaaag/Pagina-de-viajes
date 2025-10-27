<?php
session_start();

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
        <h2 class="text-center mb-4">Iniciar Sesión</h2>

        <?php if(isset($error)): ?>
        <div class="alert alert-danger text-center"><?= $error ?></div>
        <?php endif; ?>

        <form method="POST">
            <div class="mb-3">
                <label class="form-label">Usuario</label>
                <input type="text" name="usuario" class="form-control" required placeholder="Ej: cliente">
            </div>

            <div class="mb-3">
                <label class="form-label">Contraseña</label>
                <input type="password" name="password" class="form-control" required placeholder="Ej: 1234">
            </div>

            <button class="btn btn-success w-100 mb-3">Iniciar Sesión</button>

            <a href="index.php" class="btn btn-secondary w-100 mb-3">Volver al Inicio</a>

            <hr>

            <p class="text-center">¿No tenés una cuenta?</p>
            <a href="registro.php" class="btn btn-primary w-100">Registrarse</a>
        </form>
    </div>
</div>

</body>
</html>