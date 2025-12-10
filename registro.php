<?php
session_start();
require_once 'componentes/conexion.php';

$errores = "";
$success = "";

// Solo si se envía el formulario
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ingresar'])){

    $correo = trim($conexion->real_escape_string($_POST['nombre_usuario'] ?? ''));
    $contrasenia = trim($conexion->real_escape_string($_POST['contrasenia'] ?? ''));

    // Validar vacíos
    if(empty($correo) || empty($contrasenia)){
        $errores .= "<div class='alert alert-danger'>Por favor, completa todos los campos.</div>";
    } else {

        // Verificar si ya existe el usuario
        $query = $conexion->prepare("SELECT * FROM Usuario WHERE nombre_usuario = ?");
        $query->bind_param("s", $correo);
        $query->execute();

        $resultado = $query->get_result();
        if($resultado->num_rows >= 1){
            $errores .= "<div class='alert alert-danger'>El usuario ya está registrado.</div>";
        }

        $query->close();
    }

    // Si no hay errores, registramos
    if(empty($errores)){

        $contra_hash = password_hash($contrasenia, PASSWORD_BCRYPT);

        $query = $conexion->prepare("INSERT INTO Usuario (nombre_usuario, contrasenia) VALUES (?, ?)");
        $query->bind_param("ss", $correo, $contra_hash);

        if($query->execute()){
            // Redirección correcta
            header("Location: index.php");
            exit();
        } else {
            $errores .= "<div class='alert alert-danger'>Error en la base de datos. Intente más tarde.</div>";
        }

        $query->close();
    }

}

$conexion->close();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de viajes - Registro</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <div class="w-50 mx-auto bg-white p-4 shadow rounded">
        <h2 class="text-center mb-4">Registrarse</h2>

        <form method="POST" action="registro.php">
            <?php require_once 'componentes/comp-form-registro.php'; ?>
            <button type="submit" name="ingresar" class="btn btn-primary w-100 mt-3">Registrarse</button>
        </form>
    </div>
</div>

</body>
</html>

