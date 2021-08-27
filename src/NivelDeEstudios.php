<?php
namespace src;

use Exception;

class NivelDeEstudios
{
    private string $_nivelDeEstudios;
    
    private $_niveles = array(
        'Sin información', 
        'Primaria',
        'Secundaria', 
        'Bachillerato',
        'Técnico superior',
        'Licenciatura',
        'Maestría',
        'Doctorado'
    );

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
        if(in_array($nivelDeEstudios,$this->_niveles))
        {
            return $nivelDeEstudios;
        }

        throw new Exception("Error en Nivel de Estudios");  
    }
}