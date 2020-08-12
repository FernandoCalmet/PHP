<?php

declare(strict_types=1);

use App\Controladores\UsuarioControlador;
use App\Vistas\UsuarioVista;

include __DIR__ . '/../../src/Controladores/UsuarioControlador.php';;
include __DIR__ . '/../../src/Vistas/UsuarioVista.php';

class GetData
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
}
