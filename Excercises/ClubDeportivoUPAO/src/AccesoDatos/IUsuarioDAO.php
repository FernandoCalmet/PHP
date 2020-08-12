<?php

declare(strict_types=1);

namespace App\AccesoDatos;

use App\Modelos\Usuario;

interface IUsuarioDAO
{
    public function getAllUsuarios();
    public function getUsuario(string $dni): object;
    public function createUsuario(Usuario $usuario): object;
    public function updateUsuario(Usuario $usuario): object;
    public function deleteUsuario(Usuario $usuario): void;
    public function checkUsuarioByEmail(string $correo): void;
}
