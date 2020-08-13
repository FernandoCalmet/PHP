<?php

declare(strict_types=1);

namespace App\Vistas;

use App\AccesoDatos\UsuarioDAO;

require __DIR__ . '/../AccesoDatos/UsuarioDAO.php';

class UsuarioVista
{
    public function vistaMostrarUsuario(object $usuario)
    {
        $usuario_dao = new UsuarioDAO();
        return $usuario_dao->getUsuario($usuario);
    }

    public function vistaMostrarUsuarios()
    {
        $usuario_dao = new UsuarioDAO();
        return $usuario_dao->getAllUsuarios();
    }

    public function vistaRegistrarUsuario(object $usuario)
    {
        $usuario_dao = new UsuarioDAO();
        $usuario_dao->checkUsuarioByEmail($usuario->correo);
        return $usuario_dao->createUsuario($usuario);
    }

    public function vistaModificarUsuario(object $usuario)
    {
        $usuario_dao = new UsuarioDAO();
        return $usuario_dao->updateUsuario($usuario);
    }

    public function vistaEliminarUsuario(object $usuario)
    {
        $usuario_dao = new UsuarioDAO();
        $usuario_dao->deleteUsuario($usuario);
    }

    public function vistaLoginUsuario(object $usuario)
    {
        $usuario_dao = new UsuarioDAO();
        return $usuario_dao->loginUsuario($usuario);
    }

    public function vistaMostrarCamposFromUsuario(object $usuario)
    {
        $usuario_dao = new UsuarioDAO();
        return $usuario_dao->getAllCamposFromUsuarios($usuario);
    }
}
