<?php
namespace src;

use Exception;

class TipoDeJornada
{
    private string $_tipoDeJornada;

    public function __construct(string $tipoDeJornada)
    {
        $this->_tipoDeJornada = $this->setTipoDeJornada($tipoDeJornada);
    }

    public function tipoDeJornada(): string
    {
        return $this->_tipoDeJornada;
    }

    private function setTipoDeJornada(string $tipoDeJornada): string
    {
        if(
            strtolower($tipoDeJornada) == 'Fijo nocturno (entre las 20:00 y 6:00 hrs)' || 
            strtolower($tipoDeJornada) == 'Fijo diurno (entre las 6:00 y 20:00 hrs' ||
            strtolower($tipoDeJornada) == 'Fijo mixto (combinación de nocturno y diurno)'
        )
        {
            return $tipoDeJornada;
        }

        throw new Exception("Error en Tipo de Jornada", 1);  
    }
}