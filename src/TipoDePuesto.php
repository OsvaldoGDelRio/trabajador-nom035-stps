<?php
namespace src;

use Exception;

class TipoDePuesto
{
    private string $_tipoDePuesto;

    public function __construct(string $tipoDePuesto)
    {
        $this->_tipoDePuesto = $this->setTipoDePuesto($tipoDePuesto);
    }

    public function tipoDePuesto(): string
    {
        return $this->_tipoDePuesto;
    }

    private function setTipoDePuesto(string $tipoDePuesto): string
    {
        if(
            strtolower($tipoDePuesto) == 'Operativo' || 
            strtolower($tipoDePuesto) == 'Profesional o técnico' ||
            strtolower($tipoDePuesto) == 'Supervisor' || 
            strtolower($tipoDePuesto) == 'Gerente'
        )
        {
            return $tipoDePuesto;
        }

        throw new Exception("Error en Tipo de Puesto", 1);  
    }
}