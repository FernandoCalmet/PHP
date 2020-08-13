<?php

declare(strict_types=1);

use App\Controladores\CampoControlador;
use App\Vistas\CampoVista;

include __DIR__ . '/../../src/Controladores/CampoControlador.php';
include __DIR__ . '/../../src/Vistas/CampoVista.php';

final class CampoData
{
    private $campoVista;

    public function __construct()
    {
        $this->campoVista = new CampoVista();
    }

    public function getCampo($campoModel)
    {
        $campoControlador = new CampoControlador($campoModel, $this->campoVista);
        return $campoControlador->getOneVista($campoModel);
    }

    public function getCampos($campoModel)
    {
        $campoControlador = new CampoControlador($campoModel, $this->campoVista);
        return $campoControlador->getAllVista();
    }

    public function registrarCampo($campoModel)
    {
        $campoControlador = new CampoControlador($campoModel, $this->campoVista);
        return $campoControlador->registerVista($campoModel);
    }

    public function modificarCampo($campoModel)
    {
        $campoControlador = new CampoControlador($campoModel, $this->campoVista);
        return $campoControlador->updateVista($campoModel);
    }

    public function eliminarCampo($campoModel)
    {
        $campoControlador = new CampoControlador($campoModel, $this->campoVista);
        return $campoControlador->deleteVista($campoModel);
    }
}
