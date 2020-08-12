<?php

declare(strict_types=1);

namespace App\Modelos;

class Reserva
{
    private $id, $fecha_reserva, $estado, $descripcion, $usuarioId, $campoId;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getFechaReserva(): string
    {
        return $this->fecha_reserva;
    }

    public function setFechaReserva(string $fecha_reserva): void
    {
        $this->fecha_reserva = $fecha_reserva;
    }

    public function getEstado(): string
    {
        return $this->estado;
    }

    public function setEstado(string $estado): void
    {
        $this->estado = $estado;
    }

    public function getUsuarioId(): int
    {
        return $this->usuarioId;
    }

    public function setUsuarioId(int $usuarioId): void
    {
        $this->usuarioId = $usuarioId;
    }

    public function getCampoId(): int
    {
        return $this->campoId;
    }

    public function setCampoId(int $campoId): void
    {
        $this->campoId = $campoId;
    }

    public function getDescripcion(): string
    {
        return $this->descripcion;
    }

    public function setDescripcion(string $descripcion): void
    {
        $this->descripcion = $descripcion;
    }
}
