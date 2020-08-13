<?php
if (isset($_GET['id_campo']) && isset($_GET['id_usuario'])) {
    include_once __DIR__ . '/CampoData.php';
    $campo = new stdClass(); 
    $campo->usuarioId = $_GET['id_usuario'];
    $campo->campoId = $_GET['id_campo'];
    $campoData = new CampoData();
    $campoData->eliminarCampo($campo);
    header("Location: /reservas");
}