<?php

declare(strict_types=1);

use App\Controladores\UsuarioControlador;
use App\Vistas\UsuarioVista;

include __DIR__ . '/../../src/Controladores/UsuarioControlador.php';
include __DIR__ . '/../../src/Vistas/UsuarioVista.php';

final class UsuarioData
{
    private $usuarioVista;

    public function __construct()
    {
        $this->usuarioVista = new UsuarioVista();
    }

    public function getUsuario($usuarioModel)
    {
        $usuarioControlador = new UsuarioControlador($usuarioModel, $this->usuarioVista);
        return $usuarioControlador->getOneVista($usuarioModel);
    }

    public function getUsuarios($usuarioModel)
    {
        $usuarioControlador = new UsuarioControlador($usuarioModel, $this->usuarioVista);
        return $usuarioControlador->getAllVista();
    }

    public function registrarUsuario($usuarioModel)
    {
        $usuarioControlador = new UsuarioControlador($usuarioModel, $this->usuarioVista);
        return $usuarioControlador->registerVista($usuarioModel);
    }

    public function modificarUsuario($usuarioModel)
    {
        $usuarioControlador = new UsuarioControlador($usuarioModel, $this->usuarioVista);
        return $usuarioControlador->updateVista($usuarioModel);
    }

    public function eliminarUsuario($usuarioModel)
    {
        $usuarioControlador = new UsuarioControlador($usuarioModel, $this->usuarioVista);
        return $usuarioControlador->deleteVista($usuarioModel);
    }

    public function loginUsuario($usuarioModel)
    {
        $usuarioControlador = new UsuarioControlador($usuarioModel, $this->usuarioVista);
        return $usuarioControlador->loginVista($usuarioModel);
    }
}
