<?php

declare(strict_types=1);

namespace App\Controladores;

use App\Vistas\UsuarioVista;

class UsuarioControlador
{
    private $modelo;
    private $vista;

    public function __construct(object $modelo, UsuarioVista $vista)
    {
        $this->modelo = $modelo;
        $this->vista = $vista;
    }

    public function getOneVista()
    {
        return $this->vista->vistaMostrarUsuario($this->modelo);
    }

    public function getAllVista()
    {
        return $this->vista->vistaMostrarUsuarios();
    }

    public function registerVista()
    {
        return $this->vista->vistaRegistrarUsuario($this->modelo);
    }

    public function updateVista()
    {
        return $this->vista->vistaModificarUsuario($this->modelo);
    }

    public function deleteVista()
    {
        return $this->vista->vistaEliminarUsuario($this->modelo);
    }

    public function loginVista()
    {
        return $this->vista->vistaLoginUsuario($this->modelo);
    }
}
