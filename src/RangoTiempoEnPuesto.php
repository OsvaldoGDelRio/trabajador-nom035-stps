<?php
namespace src;

use Exception;

class RangoTiempoEnPuesto
{
    private string $_rangoTiempoEnPuesto;

    public function __construct(string $rangoTiempoEnPuesto)
    {
        $this->_rangoTiempoEnPuesto = $this->setRangoTiempoEnPuesto($rangoTiempoEnPuesto);
    }

    public function rangoTiempoEnPuesto(): string
    {
        return $this->_rangoTiempoEnPuesto;
    }

    private function setRangoTiempoEnPuesto(string $rangoTiempoEnPuesto): string
    {
        if(
            strtolower($rangoTiempoEnPuesto) == 'Menos de 6 meses' || 
            strtolower($rangoTiempoEnPuesto) == 'Entre 6 meses y 1 año' ||
            strtolower($rangoTiempoEnPuesto) == 'Entre 1 a 4 años' || 
            strtolower($rangoTiempoEnPuesto) == 'Entre 5 a 9 años' ||
            strtolower($rangoTiempoEnPuesto) == 'Entre 10 a 14 años' || 
            strtolower($rangoTiempoEnPuesto) == 'Entre 15 a 19 años' ||
            strtolower($rangoTiempoEnPuesto) == 'Entre 20 a 24 años' || 
            strtolower($rangoTiempoEnPuesto) == '25 años o más'
        )
        {
            return $rangoTiempoEnPuesto;
        }

        throw new Exception("Error en Rango de tiempo en puesto", 1);   
    }
}