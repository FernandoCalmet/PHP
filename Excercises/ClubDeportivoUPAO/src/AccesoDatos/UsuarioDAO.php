<?php

declare(strict_types=1);

namespace App\AccesoDatos;

use App\Exception\UsuarioException;

require __DIR__ . '/IUsuarioDAO.php';
require __DIR__ . '/ConexionDAO.php';
require __DIR__ . '/../Excepciones/UsuarioException.php';

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

    public function getUsuarioId(int $id): object
    {
        $query = "SELECT id, nombre, correo, telefono, dni FROM usuarios WHERE id = :id";
        $statement = $this->basedatos->prepare($query);
        $statement->bindParam(':id', $id);
        $statement->execute();
        $usuario = $statement->fetchObject();
        if (!$usuario) {
            throw new UsuarioException('No se encontro al usuario.', 404);
        }
        return $usuario;
    }

    public function createUsuario(object $usuario): object
    {
        $query = "INSERT INTO usuarios (nombre, correo, password, telefono, dni) VALUES (:nombre, :correo, :password, :telefono, :dni)";
        $statement = $this->basedatos->prepare($query);
        $statement->bindParam(':nombre', $usuario->nombre);
        $statement->bindParam(':correo', $usuario->correo);
        $statement->bindParam(':password', $usuario->password);
        $statement->bindParam(':telefono', $usuario->telefono);
        $statement->bindParam(':dni', $usuario->dni);
        $statement->execute();
        return $this->getUsuarioId((int) $this->basedatos->lastInsertId());
    }

    public function updateUsuario(object $usuario): object
    {
        $query = "UPDATE usuarios SET nombre = :nombre, correo = :correo, telefono = :telefono, dni = :dni WHERE id = :id";
        $statement = $this->basedatos->prepare($query);
        $statement->bindParam(':id', $usuario->id);
        $statement->bindParam(':nombre', $usuario->nombre);
        $statement->bindParam(':correo', $usuario->correo);
        $statement->bindParam(':telefono', $usuario->telefono);
        $statement->bindParam(':dni', $usuario->dni);
        $statement->execute();
        return $this->getUsuarioId((int) $usuario->id);
    }

    public function deleteUsuario(object $usuario): void
    {
        $query = "DELETE FROM usuarios WHERE id = :id";
        $statement = $this->basedatos->prepare($query);
        $statement->bindParam(':id', $usuario->id);
        $statement->execute();
    }

    public function checkUsuarioByEmail(string $correo): void
    {
        $query = 'SELECT * FROM usuarios WHERE correo = :correo';
        $statement = $this->basedatos->prepare($query);
        $statement->bindParam('correo', $correo);
        $statement->execute();
        $usuario = $statement->fetchObject();
        if ($usuario) {
            throw new UsuarioException('El correo ya esta en uso.', 400);
        }
    }
}
