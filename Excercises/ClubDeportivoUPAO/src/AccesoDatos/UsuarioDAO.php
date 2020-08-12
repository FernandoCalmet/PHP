<?php

declare(strict_types=1);

namespace App\AccesoDatos;

use App\Modelos\Usuario;
use App\Exception\UsuarioException;

include __DIR__ . '/IUsuarioDAO.php';
include __DIR__ . '/ConexionDAO.php';

final class UsuarioDAO implements IUsuarioDAO
{
    private $basedatos;

    public function __construct()
    {
        $basedatos = new ConexionDAO();
        $this->basedatos = $basedatos->mysql();      
    }    

    public function getAllUsuarios()
    {
        $query = "SELECT id, nombre, correo, telefono, dni FROM usuarios";
        $statement = $this->basedatos->prepare($query);
        $statement->execute();
        return $statement->fetchAll();
    }

    public function getUsuario(string $dni): object
    {
        $query = "SELECT id, nombre, correo, telefono, dni FROM usuarios WHERE dni = :dni";
        $statement = $this->basedatos->prepare($query);
        $statement->bindParam(':dni', $dni);
        $statement->execute();
        $usuario = $statement->fetchObject();
        if (!$usuario) {
            throw new UsuarioException('No se encontro al usuario.', 404);
        }
        return $usuario;
    }

    public function createUsuario(Usuario $usuario): void
    {
        $query = "INSERT INTO usuarios (nombre, correo, telefono, dni) VALUES (:nombre, :correo, :telefono, :dni)";
        $statement = $this->basedatos->prepare($query);
        $statement->bindParam(':nombre', $usuario->getNombre());
        $statement->bindParam(':correo', $usuario->getCorreo());
        $statement->bindParam(':telefono', $usuario->getTelefono());
        $statement->bindParam(':dni', $usuario->getDNI());
        $statement->execute();
    }

    public function updateUsuario(Usuario $usuario): void
    {
        $query = "UPDATE usuarios SET nombre = :nombre, correo = :correo, telefono = :telefono, dni = :dni WHERE id = :id";
        $statement = $this->basedatos->prepare($query);
        $statement->bindParam(':id', $usuario->getId());
        $statement->bindParam(':nombre', $usuario->getNombre());
        $statement->bindParam(':correo', $usuario->getCorreo());
        $statement->bindParam(':telefono', $usuario->getTelefono());
        $statement->bindParam(':dni', $usuario->getDNI());
        $statement->execute();
    }

    public function deleteUsuario(Usuario $usuario): void
    {
        $query = "DELETE FROM usuarios WHERE id = :id";
        $statement = $this->basedatos->prepare($query);
        $statement->bindParam(':id', $usuario->getId());
        $statement->execute();
    }
}
