<?php

declare(strict_types=1);

namespace App\AccesoDatos;

use App\Entidades\Usuario;
use App\AccesoDatos\ConexionDAO;
use PDO;

class UsuarioDAO implements IUsuarioDAO
{
    private $conexionBD;

    function __construct()
    {
        $this->conexionBD = new ConexionDAO();
    }

    function getAllUsuarios()
    {
        $dbh = $this->conexionBD->mysql();
        $query = "SELECT id, nombre, correo, telefono, dni FROM usuarios";
        $statement = $dbh->prepare($query);
        $statement->execute();
        $usuarios = $statement->fetchAll(PDO::FETCH_ASSOC);
        $dbh = null;
        return $usuarios;
    }

    function getUsuario(int $dni): Usuario
    {
        $dbh = $this->conexionBD->mysql();
        $query = "SELECT id, nombre, correo, telefono, dni FROM usuarios WHERE dni = :dni";
        $statement = $dbh->prepare($query);
        $statement->bindParam(':id', $dni);
        $statement->execute();
        $usuario = $statement->fetchObject(PDO::FETCH_ASSOC);
        $dbh = null;
        return $usuario;
    }

    function createUsuario(Usuario $usuario): void
    {
        $dbh = $this->conexionBD->mysql();
        $query = "INSERT INTO usuarios (nombre, correo, telefono, dni) VALUES (:nombre, :correo, :telefono, :dni)";
        $statement = $dbh->prepare($query);
        $statement->bindParam(':nombre', $usuario->getNombre());
        $statement->bindParam(':correo', $usuario->getCorreo());
        $statement->bindParam(':telefono', $usuario->getTelefono());
        $statement->bindParam(':dni', $usuario->getDNI());
        $statement->execute();
        $dbh = null;
    }

    function updateUsuario(Usuario $usuario): void
    {
        $dbh = $this->conexionBD->mysql();
        $query = "UPDATE usuarios SET nombre = :nombre, correo = :correo, telefono = :telefono, dni = :dni WHERE id = :id";
        $statement = $dbh->prepare($query);
        $statement->bindParam(':id', $usuario->getId());
        $statement->bindParam(':nombre', $usuario->getNombre());
        $statement->bindParam(':correo', $usuario->getCorreo());
        $statement->bindParam(':telefono', $usuario->getTelefono());
        $statement->bindParam(':dni', $usuario->getDNI());
        $statement->execute();
        $dbh = null;
    }

    function deleteUsuario(Usuario $usuario): void
    {
        $dbh = $this->conexionBD->mysql();
        $query = "DELETE FROM usuarios WHERE id = :id";
        $statement = $dbh->prepare($query);
        $statement->bindParam(':id', $usuario->getId());
        $statement->execute();
        $dbh = null;
    }
}
