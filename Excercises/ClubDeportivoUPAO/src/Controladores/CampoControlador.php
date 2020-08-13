<?php

declare(strict_types=1);

namespace App\Controladores;

use App\Vistas\CampoVista;

class CampoControlador
{
    private $modelo;
    private $vista;

    public function __construct(object $modelo, CampoVista $vista)
    {
        $this->modelo = $modelo;
        $this->vista = $vista;
    }

    public function getOneVista()
    {
        return $this->vista->vistaMostrarCampo($this->modelo);
    }

    public function getAllVista()
    {
        return $this->vista->vistaMostrarCampos();
    }

    public function registerVista()
    {
        return $this->vista->vistaRegistrarCampo($this->modelo);
    }

    public function updateVista()
    {
        return $this->vista->vistaModificarCampo($this->modelo);
    }

    public function deleteVista()
    {
        return $this->vista->vistaEliminarCampo($this->modelo);
    }

    public function getUsuarioCamposVista()
    {
        return $this->vista->vistaMostrarCamposFromUsuario($this->modelo->correo);
    }

    public function getUsuarioReservasVista()
    {
        return $this->vista->vistaMostrarReservasFromUsuario($this->modelo->id);
    }
}
