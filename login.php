<?php

require_once 'componentes/conexion.php';

if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['ingresar'])) {
    $errores = '';
    $correo = $conexion->real_escape_string(string: $_POST['nombre_usuario']);
    $contrasenia = $conexion->real_escape_string(string: $_POST['contrasenia']);
}
    
    if (empty($correo)  || empty($contrasenia)){
        $errores .= "<div class='alert alert-danger'>por favor, completa todos los campos";

    } else {
        $frase = $conexion->prepare("SELECT * FROM Usuario WHERE Usuario.Email =?");
        $frase->bind_param('s',$correo);
        $frase->execute();



        $usuario = $frase->get_result()->fetch_assoc();

        if ($Usuario){

            if  (password_verify($contrasenia,$nombre_usuario['contrasenia'])) {
                session_start();
                $_SESSION["id_usuario"] = $Usuario['id_usuario'];
                $_SESSION['rol'] = $Usuario ['rol'];
                $_SESSION['nombre_usuario'] = $Usuario['nombre_usuario'];

                $conexion->close();

                header('Location: index.php');
                exit;
            } else {
                $errores .= "<div class='alert alert-danger'>Correo o contraseña incorrectos.</div>";
        }
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
            <?php require_once 'componentes/comp-form-login.php'; ?>
        </form>
        
    </div>
</div>
        
</body>
</html>