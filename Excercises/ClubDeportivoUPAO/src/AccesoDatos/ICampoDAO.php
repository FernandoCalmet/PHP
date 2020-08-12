<?php

declare(strict_types=1);

namespace App\AccesoDatos;

interface ICampoDAO
{
    public function getAllCampos();
    public function getCampo(object $campo): object;
    public function createCampo(object $campo): object;
    public function updateCampo(object $campo): object;
    public function deleteCampo(object $campo): void;
}
