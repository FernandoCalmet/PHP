<?php

declare(strict_types=1);

namespace App\Vistas;

use App\AccesoDatos\ReservaDAO;

require __DIR__ . '/../AccesoDatos/ReservaDAO.php';

class ReservaVista
{
    public function vistaMostrarReserva(object $reserva)
    {
        $reserva_dao = new ReservaDAO();
        return $reserva_dao->getReserva($reserva);
    }

    public function vistaMostrarReservas()
    {
        $reserva_dao = new ReservaDAO();
        return $reserva_dao->getAllReservas();
    }

    public function vistaRegistrarReserva(object $reserva)
    {
        $reserva_dao = new ReservaDAO();
        return $reserva_dao->createReserva($reserva);
    }

    public function vistaModificarReserva(object $reserva)
    {
        $reserva_dao = new ReservaDAO();
        return $reserva_dao->updateReserva($reserva);
    }

    public function vistaEliminarReserva(object $reserva)
    {
        $reserva_dao = new ReservaDAO();
        $reserva_dao->deleteReserva($reserva);
    }
}
