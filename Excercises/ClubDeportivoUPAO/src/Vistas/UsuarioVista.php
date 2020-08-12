<?php

declare(strict_types=1);

namespace App\Vistas;

use App\AccesoDatos\UsuarioDAO;

require __DIR__ . '/../AccesoDatos/UsuarioDAO.php';

class UsuarioVista
{
    public function vistaMostrarUsuario($dni)
    {
        $usuario_dao = new UsuarioDAO();
        return $usuario_dao->getUsuario($dni);
    }

    public function vistaRegistrarUsuario(object $usuario)
    {
        $usuario_dao = new UsuarioDAO();
        $usuario_dao->checkUsuarioByEmail($usuario->correo);
        return $usuario_dao->createUsuario($usuario);
    }
}
