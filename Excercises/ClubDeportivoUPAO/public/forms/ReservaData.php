<?php

declare(strict_types=1);

use App\Controladores\ReservaControlador;
use App\Vistas\ReservaVista;

include __DIR__ . '/../../src/Controladores/ReservaControlador.php';
include __DIR__ . '/../../src/Vistas/ReservaVista.php';

final class ReservaData
{
    private $reservaVista;

    public function __construct()
    {
        $this->reservaVista = new ReservaVista();
    }

    public function getReserva($reservaModel)
    {
        $reservaControlador = new ReservaControlador($reservaModel, $this->reservaVista);
        return $reservaControlador->getOneVista($reservaModel);
    }

    public function getReservas($reservaModel)
    {
        $reservaControlador = new ReservaControlador($reservaModel, $this->reservaVista);
        return $reservaControlador->getAllVista();
    }

    public function registrarReserva($reservaModel)
    {
        $reservaControlador = new ReservaControlador($reservaModel, $this->reservaVista);
        return $reservaControlador->registerVista($reservaModel);
    }

    public function modificarReserva($reservaModel)
    {
        $reservaControlador = new ReservaControlador($reservaModel, $this->reservaVista);
        return $reservaControlador->updateVista($reservaModel);
    }

    public function eliminarReserva($reservaModel)
    {
        $reservaControlador = new ReservaControlador($reservaModel, $this->reservaVista);
        return $reservaControlador->deleteVista($reservaModel);
    }
}
