<?php
namespace src;

use src\Edad;

class RangoDeEdad
{
    private string $_rangoDeEdad;
    private $_rangos = array(
        '15' => 19,
        '20' => 24,
        '25' => 29,
        '30' => 34,
        '35' => 39,
        '40' => 44,
        '45' => 49,
        '50' => 54,
        '55' => 59,
        '60' => 64,
        '65' => 69,
        '70' => 99  
    );

    public function __construct(Edad $Edad)
    {
        $this->_rangoDeEdad = $this->setRangoDeEdad($Edad->edad());
    }

    public function rangoDeEdad(): string
    {
        return $this->_rangoDeEdad;
    }

    private function setRangoDeEdad(int $edad): string
    {
        $rango = '';

        foreach($this->_rangos as $k => $r)
        {
            
            if($edad >= $k && $edad <= $r)
            {
                $rango = "$k-$r";
            }
        }

        return $rango;  
    }
}