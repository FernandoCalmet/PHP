<?php

declare(strict_types=1);

namespace App\Vistas;

use App\AccesoDatos\UsuarioDAO;
use App\Modelos\Usuario;

class UsuarioVista
{
    public function mostrarDetallesUsuario($dni)
    {
        $usuario = new Usuario();
        $usuario_dao = new UsuarioDAO();

        $usuario = $usuario_dao->getUsuario($dni);
        var_dump($usuario);
    }
}
