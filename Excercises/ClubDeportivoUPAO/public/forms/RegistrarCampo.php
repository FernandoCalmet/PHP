<?php
if (isset($_GET['id_usuario']) && isset($_GET['nombre']) && isset($_GET['telefono']) && isset($_GET['descripcion'])) {
    include_once __DIR__ . '/CampoData.php';
    $campo = new stdClass();
    $campo->usuarioId = $_GET['id_usuario'];
    $campo->nombre = $_GET['nombre'];
    $campo->telefono = $_GET['telefono'];
    $campo->descripcion = $_GET['descripcion'];
    try {
        $campoData = new CampoData();
        $campoData->registrarCampo($campo);
        header("Location: /reservas");
    } catch (Exception $ex) {
        echo '<script language="javascript">alert("ERROR: ' . $ex->getMessage() . '")</script>';
    }
} else {
    header("Location: /reservas");
}
