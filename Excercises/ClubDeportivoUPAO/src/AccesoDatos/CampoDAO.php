<?php

declare(strict_types=1);

namespace App\AccesoDatos;

use App\Exception\CampoException;

require __DIR__ . '/ICampoDAO.php';
require __DIR__ . '/ConexionDAO.php';
require __DIR__ . '/../Excepciones/CampoException.php';

final class CampoDAO implements ICampoDAO
{
    private $basedatos;

    public function __construct()
    {
        $basedatos = new ConexionDAO();
        $this->basedatos = $basedatos->mysql();
    }

    public function getAllCampos()
    {
        $query = "SELECT id, nombre, correo, telefono, descripcion FROM campos";
        $statement = $this->basedatos->prepare($query);
        $statement->execute();
        return $statement->fetchAll();
    } 

    public function getCampo(object $campo): object
    {
        $query = "SELECT * FROM campos WHERE nombre = :nombre";
        $statement = $this->basedatos->prepare($query);
        $statement->bindParam(':nombre', $campo->nombre);
        $statement->execute();
        $campo = $statement->fetchObject();
        if (!$campo) {
            throw new CampoException('No se encontro al campo.', 404);
        }
        return $campo;
    }

    public function getCampoId(int $id): object
    {
        $query = "SELECT * FROM campos WHERE id = :id";
        $statement = $this->basedatos->prepare($query);
        $statement->bindParam(':id', $id);
        $statement->execute();
        $campo = $statement->fetchObject();
        if (!$campo) {
            throw new CampoException('No se encontro al campo.', 404);
        }
        return $campo;
    }

    public function createCampo(object $campo): object
    {
        $query = "INSERT INTO campos (nombre, correo, descripcion, telefono) VALUES (:nombre, :correo, :descripcion, :telefono)";
        $statement = $this->basedatos->prepare($query);
        $statement->bindParam(':nombre', $campo->nombre);
        $statement->bindParam(':correo', $campo->correo);
        $statement->bindParam(':descripcion', $campo->descripcion);
        $statement->bindParam(':telefono', $campo->telefono);
        $statement->execute();
        return $this->getCampoId((int) $this->basedatos->lastInsertId());
    }

    public function updateCampo(object $campo): object
    {
        $query = "UPDATE campos SET nombre = :nombre, correo = :correo, descripcion = :descripcion, telefono = :telefono WHERE id = :id";
        $statement = $this->basedatos->prepare($query);
        $statement->bindParam(':id', $campo->id);
        $statement->bindParam(':nombre', $campo->nombre);
        $statement->bindParam(':correo', $campo->correo);
        $statement->bindParam(':descripcion', $campo->descripcion);
        $statement->bindParam(':telefono', $campo->telefono);
        $statement->execute();
        return $this->getCampoId((int) $campo->id);
    }

    public function deleteCampo(object $campo): void
    {
        $query = "DELETE FROM campos WHERE id = :id";
        $statement = $this->basedatos->prepare($query);
        $statement->bindParam(':id', $campo->id);
        $statement->execute();
    }

    public function getAllCamposFromUsuarios(string $correo)
    {
        $query = "SELECT id, nombre, correo, telefono, descripcion FROM campos WHERE correo = :correo";
        $statement = $this->basedatos->prepare($query);
        $statement->bindParam('correo', $correo);
        $statement->execute();
        return $statement->fetchAll();
    }

    public function getAllReservasFromUsuarios(int $id)
    {        
        $query = "
            SELECT 
                reservas.id,
                reservas.fecha_reserva,
                reservas.estado,
                campos.nombre `campo_nombre`
            FROM ((reservas
            INNER JOIN campos ON reservas.campoId = campos.id)
            INNER JOIN usuarios ON reservas.usuarioId = usuarios.id)
            WHERE reservas.usuarioId = :id
        ";
        $statement = $this->basedatos->prepare($query);
        $statement->bindParam('id', $id);
        $statement->execute();
        return $statement->fetchAll();
    }
}
