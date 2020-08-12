<?php

declare(strict_types=1);

use App\Controladores\UsuarioControlador;
use App\Vistas\UsuarioVista;

include __DIR__ . '/../../src/Controladores/UsuarioControlador.php';;
include __DIR__ . '/../../src/Vistas/UsuarioVista.php';

class PostData
{
    private $usuarioVista;
    private $usuarioControlador;

    public function __construct($usuarioModel)
    {
        $this->usuarioVista = new UsuarioVista();
        $this->usuarioControlador = new UsuarioControlador($usuarioModel, $this->usuarioVista);
    }

    public function registrarUsuario()
    {
        $this->usuarioControlador->registerVista($this->usuarioModel);
    }
}
