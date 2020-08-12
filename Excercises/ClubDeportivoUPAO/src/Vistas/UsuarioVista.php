<?php

declare(strict_types=1);

namespace App\Vistas;

use App\AccesoDatos\UsuarioDAO;

class UsuarioVista
{
    public function vistaMostrarUsuario($dni)
    {
        $usuario_dao = new UsuarioDAO();
        return $usuario_dao->getUsuario($dni);
    }

    public function vistaRegistrarUsuario($usuario)
    {
        $usuario_dao = new UsuarioDAO();
        return $usuario_dao->createUsuario($usuario);
    }
}
