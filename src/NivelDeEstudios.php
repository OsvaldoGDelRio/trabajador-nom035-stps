<?php
namespace src;

use Exception;

class NivelDeEstudios
{
    private string $_nivelDeEstudios;

    public function __construct(string $nivelDeEstudios)
    {
        $this->_nivelDeEstudios = $this->setNivelDeEstudios($nivelDeEstudios);
    }

    public function nivelDeEstudios(): string
    {
        return $this->_nivelDeEstudios;
    }

    private function setNivelDeEstudios(string $nivelDeEstudios): string
    {
        if(
            strtolower($nivelDeEstudios) == 'Sin información' || 
            strtolower($nivelDeEstudios) == 'Primaria' ||
            strtolower($nivelDeEstudios) == 'Secundaria' || 
            strtolower($nivelDeEstudios) == 'Bachillerato' ||
            strtolower($nivelDeEstudios) == 'Técnico superior' ||
            strtolower($nivelDeEstudios) == 'Licenciatura' ||
            strtolower($nivelDeEstudios) == 'Maestría' ||
            strtolower($nivelDeEstudios) == 'Doctorado'
        )
        {
            return $nivelDeEstudios;
        }

        throw new Exception("Error en Nivel de Estudios", 1);  
    }
}