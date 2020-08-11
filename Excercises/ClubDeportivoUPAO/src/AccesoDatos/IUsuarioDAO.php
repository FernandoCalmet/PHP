<?php

namespace App\AccesoDatos;

use App\Entidades\Usuario;

interface IUsuarioDAO
{
    public function getAllUsuarios();
    public function getUsuario(int $dni): Usuario;
    public function createUsuario(Usuario $usuario): void;
    public function updateUsuario(Usuario $usuario): void;
    public function deleteUsuario(Usuario $usuario): void;
}
