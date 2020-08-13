<?php
if (isset($_GET['id_campo']) && isset($_GET['id_usuario'])) {
    include_once __DIR__ . '/CampoData.php';
    $campo = new stdClass();
    $campo->usuarioId = $_GET['id_usuario'];
    $campo->campoId = $_GET['id_campo'];
    $usuario = $_SESSION['usuario'];
    try {
        $campoData = new CampoData();
        $campoData->eliminarCampo($campo);
        header("Location: /reservas");
    } catch (Exception $ex) {
        echo '<script language="javascript">alert("ERROR: ' . $ex->getMessage() . '")</script>';
    }
}
