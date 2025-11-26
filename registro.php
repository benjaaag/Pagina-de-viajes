<?php
require_once 'componentes/conexion.php';

    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['ingresar'])){
        $errores = '';
    $correo = $conexion->real_escape_string(string: $_POST['usuario']);
    $contrasenia = $conexion->real_escape_string(string: $_POST['contrasenia']);
    }

if (empty($correo)  || empty($contrasenia)) {
    $errores .= "<div class='alert alert-danger'>por favor, completa todos los campos.";
} else {
    $query = $conexion->prepare(query: 'SELECT * FROM usuario WHERE email = ?');
    $query->bind_param('s',$correo);
    $query->execute();

    if ($query->get_result()->num_rows > 0){
        $errores .= "<div class='alert alert-danger'>El correo ya esta registrado.";
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
    <h1><form action=""></form></h1>
</body>
</html>