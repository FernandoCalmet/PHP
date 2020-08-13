<?php
if (isset($_GET['id_usuario']) && isset($_GET['nombre']) && isset($_GET['telefono']) && isset($_GET['descripcion'])) {
    include_once __DIR__ . '/CampoData.php';
    $campo = new stdClass();
    $campo->usuarioId = $_GET['id_usuario'];
    $campo->nombre = $_GET['nombre'];
    $campo->telefono = $_GET['telefono'];
    $campo->descripcion = $_GET['descripcion'];
    $campoData = new CampoData();
    $campoData->registrarCampo($campo);
    header("Location: /reservas");
} else {
    header("Location: /reservas");
}
