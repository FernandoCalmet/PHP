<?php

declare(strict_types=1);

use App\Controladores\UsuarioControlador;
use App\Vistas\UsuarioVista;

include __DIR__ . '/../../src/Controladores/UsuarioControlador.php';;
include __DIR__ . '/../../src/Vistas/UsuarioVista.php';

class PostData
{
    private $usuarioVista;

    public function __construct()
    {
        $this->usuarioVista = new UsuarioVista();     
    }

    public function registrarUsuario($usuarioModel)
    {
        $usuarioControlador = new UsuarioControlador($usuarioModel, $this->usuarioVista);
        $usuarioControlador->registerVista($usuarioModel);
    }
}
