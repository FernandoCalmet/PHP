<?php

declare(strict_types=1);

namespace App\AccesoDatos;

use App\Modelos\Usuario;

interface IUsuarioDAO
{
    public function getAllUsuarios();
    public function getUsuario(string $dni): object;
    public function createUsuario(Usuario $usuario): void;
    public function updateUsuario(Usuario $usuario): void;
    public function deleteUsuario(Usuario $usuario): void;
}
