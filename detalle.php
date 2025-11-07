<?php
require_once 'componentes/conexion.php';
$id_paquete = isset($_GET['id']) ? intval(value: $_GET['id']) : 0;


if($id_paquete != null && $id_paquete > 0) {
    require_once 'componentes/conexion.php';

    $paquete = $conexion ->query(query: "
        SELECT *
        FROM paquete
        WHERE paquete.id_paquete = $id_paquete AND (paquete.estado = 'activo' OR paquete.estado ='finalizado')
    
    ")->fetch_assoc();



    if (!$paquete) {
        echo "<div class='alert alert-dange'>Paquete no encontrado o no disponible. </div>";
        exit;
    } else{
        $servicio = $conexion->query(query: "
        SELECT * 
        FROM servicio JOIN paquete_servicio ON servicio.id_servicio = paquete_sevicio.id_paquete
        WHERE paquete_servicio.id_paquete = $id_paquete; "); 
    }
    /*$fechaLimite =  date_create(datetime: $paquete['fecha_fin']);
    $hoy = new DateTime();
    $dias_restantes = $hoy->diff(targetObject: $fechaLimite)->format(format: '%a');

    $cupo_disponible = $paquete['limite_personas'] - $paquete['cupo_reservado'];*/
    
}else {
    echo "<div class='alert-danger'>ID de paquete invalido.</div>";
    exit;
}
?>

<main class="flex-shrink-0 py-4">
    <div class="container d-flex justify-content-center">
        <div class="card text-white shadow-lg border-0 rounded-4 overflow-hidden w-100" style="max-width: 800px">
    <h1> pudiste abrirlo</h1>