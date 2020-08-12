<?php

declare(strict_types=1);

namespace App\Vistas;

use App\AccesoDatos\CampoDAO;

require __DIR__ . '/../AccesoDatos/CampoDAO.php';

class CampoVista
{
    public function vistaMostrarCampo(object $campo)
    {
        $campo_dao = new CampoDAO();
        return $campo_dao->getCampo($campo);
    }

    public function vistaMostrarCampos()
    {
        $campo_dao = new CampoDAO();
        return $campo_dao->getAllCampos();
    }

    public function vistaRegistrarCampo(object $campo)
    {
        $campo_dao = new CampoDAO();
        return $campo_dao->createCampo($campo);
    }

    public function vistaModificarCampo(object $campo)
    {
        $campo_dao = new CampoDAO();
        return $campo_dao->updateCampo($campo);
    }

    public function vistaEliminarCampo(object $campo)
    {
        $campo_dao = new CampoDAO();
        $campo_dao->deleteCampo($campo);
    }
}
