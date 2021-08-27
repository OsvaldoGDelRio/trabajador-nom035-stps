<?php
namespace src;

use Exception;

class RangoExperienciaLaboral
{
    private string $_rangoExperienciaLaboral;
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
    public function __construct(string $rangoExperienciaLaboral)
    {
        $this->_rangoExperienciaLaboral = $this->setRangoExperienciaLaboral($rangoExperienciaLaboral);
    }

    public function rangoExperienciaLaboral(): string
    {
        return $this->_rangoExperienciaLaboral;
    }

    private function setRangoExperienciaLaboral(string $rangoExperienciaLaboral): string
    {
        if(in_array($rangoExperienciaLaboral,$this->_niveles))
        {
            return $rangoExperienciaLaboral;
        }

        throw new Exception("Error en Rango Experiencia Laboral", 1);   
    }
}