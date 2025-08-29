<?php
$servidor ="localhost";
$usuario = "root";
$contrasenia ="";
$base ="agencia_de_viajes_porteñito";

// conexion propia a la bbdd

$conexion = new myslqi($servidor,$usuario,$contrasenia,$base);

//c chequear la conexion
if($conexion->connect_error){
    die("error de conexion: " . $conexion->connect_error);
}