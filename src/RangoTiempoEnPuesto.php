<?php
namespace src;

use Exception;

class RangoTiempoEnPuesto
{
    private string $_rangoTiempoEnPuesto;
    private $_niveles = array(
        'Menos de 6 meses', 
        'Entre 6 meses y 1 año',
        'Entre 1 a 4 años', 
        'Entre 5 a 9 años',
        'Entre 10 a 14 años', 
        'Entre 15 a 19 años',
        'Entre 20 a 24 años', 
        '25 años o más'
    );

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
        if(in_array($rangoTiempoEnPuesto,$this->_niveles))
        {
            return $rangoTiempoEnPuesto;
        }

        throw new Exception("Error en Rango de tiempo en puesto", 1);   
    }
}