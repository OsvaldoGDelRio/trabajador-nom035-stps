<?php
namespace src;

use Exception;

class EstadoCivil
{
    private string $_estadoCivil;

    public function __construct(string $estadoCivil)
    {
        $this->_estadoCivil = $this->setEstadoCivil($estadoCivil);
    }

    public function estadoCivil(): string
    {
        return $this->_estadoCivil;
    }

    private function setEstadoCivil(string $estadoCivil): string
    {
        if(
            strtolower($estadoCivil) == 'Casado' || 
            strtolower($estadoCivil) == 'Soltero' ||
            strtolower($estadoCivil) == 'Unión libre' || 
            strtolower($estadoCivil) == 'Divorciado' ||
            strtolower($estadoCivil) == 'Vuido'
        )
        {
            return $estadoCivil;
        }

        throw new Exception("Error en Estado Civil", 1);  
    }
}