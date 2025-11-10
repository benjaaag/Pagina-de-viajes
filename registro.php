<?php
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina De viajes - LOGIN</title>
</head>
<body>
    
</body>
</html>