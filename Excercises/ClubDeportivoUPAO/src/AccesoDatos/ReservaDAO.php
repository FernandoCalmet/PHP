<?php

declare(strict_types=1);

namespace App\AccesoDatos;

use App\Exception\ReservaException;

require __DIR__ . '/IReservaDAO.php';
require __DIR__ . '/ConexionDAO.php';
require __DIR__ . '/../Excepciones/ReservaException.php';

final class ReservaDAO implements IReservaDAO
{
    private $basedatos;

    public function __construct()
    {
        $basedatos = new ConexionDAO();
        $this->basedatos = $basedatos->mysql();
    }

    public function getAllReservas()
    {
        $query = "SELECT * FROM reservas";
        $statement = $this->basedatos->prepare($query);
        $statement->execute();
        return $statement->fetchAll();
    }

    public function getReserva(object $reserva): object
    {
        $query = "SELECT * FROM reservas WHERE idUsuario = :idUsuario";
        $statement = $this->basedatos->prepare($query);
        $statement->bindParam(':idUsuario', $reserva->idUsuario);
        $statement->execute();
        $reserva = $statement->fetchObject();
        if (!$reserva) {
            throw new ReservaException('No se encontro al reserva.', 404);
        }
        return $reserva;
    }

    public function getReservaId(int $id): object
    {
        $query = "SELECT * FROM reservas WHERE id = :id";
        $statement = $this->basedatos->prepare($query);
        $statement->bindParam(':id', $id);
        $statement->execute();
        $reserva = $statement->fetchObject();
        if (!$reserva) {
            throw new ReservaException('No se encontro al reserva.', 404);
        }
        return $reserva;
    }

    public function createReserva(object $reserva): object
    {
        $query = "INSERT INTO reservas (fecha_reserva, descripcion, usuarioId, campoId) VALUES (:fecha_reserva, :descripcion, :usuarioId, :campoId)";
        $statement = $this->basedatos->prepare($query);
        $statement->bindParam(':fecha_reserva', $reserva->fecha_reserva);
        $statement->bindParam(':descripcion', $reserva->descripcion);
        $statement->bindParam(':usuarioId', $reserva->usuarioId);
        $statement->bindParam(':campoId', $reserva->campoId);
        $statement->execute();
        return $this->getReservaId((int) $this->basedatos->lastInsertId());
    }

    public function updateReserva(object $reserva): object
    {
        $query = "UPDATE reservas SET fecha_reserva = :fecha_reserva, descripcion = :descripcion, estado = :estado, usuarioId = :usuarioId, campoId = :campoId WHERE id = :id";
        $statement = $this->basedatos->prepare($query);
        $statement->bindParam(':id', $reserva->id);
        $statement->bindParam(':fecha_reserva', $reserva->fecha_reserva);
        $statement->bindParam(':descripcion', $reserva->descripcion);
        $statement->bindParam(':estado', $reserva->estado);
        $statement->bindParam(':usuarioId', $reserva->usuarioId);
        $statement->bindParam(':campoId', $reserva->campoId);
        $statement->execute();
        return $this->getReservaId((int) $reserva->id);
    }

    public function deleteReserva(object $reserva): void
    {
        $query = "DELETE FROM reservas WHERE id = :id";
        $statement = $this->basedatos->prepare($query);
        $statement->bindParam(':id', $reserva->id);
        $statement->execute();
    }
}
