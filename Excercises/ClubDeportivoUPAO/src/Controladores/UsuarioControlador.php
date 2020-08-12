<?php

declare(strict_types=1);

namespace App\Controladores;

use App\Modelos\Usuario;
use App\Vistas\UsuarioVista;

class UsuarioControlador
{
    private $modelo;
    private $vista;

    public function __construct(Usuario $modelo, UsuarioVista $vista)
    {
        $this->modelo = $modelo;
        $this->vista = $vista;
    }

    public function updateVista(): void
    {
        $this->vista->mostrarDetallesUsuario($this->modelo->getDNI());
    }

    public function setUsuarioNombre(string $nombre): void
    {
        $this->modelo->setNombre($nombre);
    }

    public function getUsuarioNombre()
    {
        $this->modelo->getNombre();
    }

    public function setUsuarioCorreo(string $correo): void
    {
        $this->modelo->setCorreo($correo);
    }

    public function getUsuarioCorreo()
    {
        $this->modelo->getCorreo();
    }

    public function setUsuarioTelefono(string $telefono): void
    {
        $this->modelo->setTelefono($telefono);
    }

    public function getUsuarioTelefono()
    {
        $this->modelo->getTelefono();
    }

    public function setUsuarioDni(string $dni): void
    {
        $this->modelo->setDNI($dni);
    }

    public function getUsuarioDni()
    {
        $this->modelo->getDNI();
    }
}
