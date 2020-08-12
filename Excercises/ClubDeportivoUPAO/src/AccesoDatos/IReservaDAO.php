<?php

declare(strict_types=1);

namespace App\AccesoDatos;

interface IReservaDAO
{
    public function getAllReservas();
    public function getReserva(object $reserva): object;
    public function createReserva(object $reserva): object;
    public function updateReserva(object $reserva): object;
    public function deleteReserva(object $reserva): void;
}
