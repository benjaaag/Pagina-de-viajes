<?php
$servidor ="localhost";
$usuario = "root";
$contrasenia ="";
$base ="agencia_portenito";

// conexion propia a la bbdd

$conexion = new mysqli($servidor,$usuario,$contrasenia,$base);

//c chequear la conexion
if($conexion->connect_error){
    die("error de conexion: " . $conexion->connect_error);
}
?>