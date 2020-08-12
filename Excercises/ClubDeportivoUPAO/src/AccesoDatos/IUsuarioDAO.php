<?php

declare(strict_types=1);

namespace App\AccesoDatos;

interface IUsuarioDAO
{
    public function getAllUsuarios();
    public function getUsuario(object $usuario): object;
    public function createUsuario(object $usuario): object;
    public function updateUsuario(object $usuario): object;
    public function deleteUsuario(object $usuario): void;
    public function checkUsuarioByEmail(string $correo): void;
    public function loginUsuario(object $usuario): object;
}
