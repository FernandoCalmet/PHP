<?php

declare(strict_types=1);

namespace App\Entidades;

class Usuario
{
    private $id, $nombre, $correo, $telefono, $dni;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }

    public function getCorreo(): string
    {
        return $this->correo;
    }

    public function setCorreo(string $correo): void
    {
        $this->correo = $correo;
    }

    public function getTelefono(): string
    {
        return $this->telefono;
    }

    public function setTelefono(string $telefono): void
    {
        $this->telefono = $telefono;
    }

    public function getDNI(): string
    {
        return $this->dni;
    }

    public function setDNI(string $dni): void
    {
        $this->dni = $dni;
    }
}
