<?php

declare(strict_types=1);

namespace App\Controladores;

use App\Vistas\ReservaVista;

class ReservaControlador
{
    private $modelo;
    private $vista;

    public function __construct(object $modelo, ReservaVista $vista)
    {
        $this->modelo = $modelo;
        $this->vista = $vista;
    }

    public function getOneVista()
    {
        return $this->vista->vistaMostrarReserva($this->modelo);
    }

    public function getAllVista()
    {
        return $this->vista->vistaMostrarReservas();
    }

    public function registerVista()
    {
        return $this->vista->vistaRegistrarReserva($this->modelo);
    }

    public function updateVista()
    {
        return $this->vista->vistaModificarReserva($this->modelo);
    }

    public function deleteVista()
    {
        return $this->vista->vistaEliminarReserva($this->modelo);
    }
}
