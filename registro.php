<?php
require_once 'componentes/conexion.php';

if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['ingresar'])){
        $errores = '';
    $correo = $conexion->real_escape_string(string: $_POST['nombre_usuario']);
    $contrasenia = $conexion->real_escape_string(string: $_POST['contrasenia']);
    }

    if (empty($correo)  || empty($contrasenia)) {
        $errores .= "<div class='alert alert-danger'>por favor, completa todos los campos.";
    } else {
        $query = $conexion->prepare(query: 'SELECT * FROM Usuario WHERE nombre_usuario = ?');
        $query->bind_param('s',$correo);
        $query->execute();

        if ($query->get_result()->num_rows > 1){
            $errores .= "<div class='alert alert-danger'>El correo ya esta registrado.";
        }
    }
    
        if(empty($errores)){
            $contra_hash = password_hash( $contrasenia, PASSWORD_BCRYPT);

            $query= $conexion->prepare(query: 'INSERT INTO Usuario (nombre_usuario, contrasenia) VALUES (?, ?)');
            $query ->bind_param('ss', $correo, $contra_hash);
            $sentencia = $query->execute();

            $query->close();
            $conexion->close();
            if($sentencia){
                $success= "<div class='alert alert-success'>Registro existoso. Por favor, inicia sesión.</div>";
                header(header: 'Location: index.php');
            } else {
                $errores= "<div class='alert alert-danger'>Error en BBDD, pruebe más tarde.</div>";
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
    <form method="POST" action="registro.php">
       <?php require_once 'componentes/comp-form-registro.php';?>
    </form>
    
</body>
</html>