<?php
if (isset($_GET['id_campo']) && isset($_GET['id_usuario'])) {
    include_once __DIR__ . '/ReservaData.php';
    $reserva = new stdClass();
    $time = time();
    $reserva->fecha_reserva = date("Y-m-d-h:i:s", $time);
    $reserva->usuarioId = $_GET['id_usuario'];
    $reserva->campoId = $_GET['id_campo'];
    $reservaData = new ReservaData();
    $reservaData->registrarReserva($reserva);
    header("Location: /reservas");
}else{
    header("Location: /reservas");
}
?>