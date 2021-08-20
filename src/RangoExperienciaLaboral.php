<?php
namespace src;

use Exception;

class RangoExperienciaLaboral
{
    private string $_rangoExperienciaLaboral;

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
        if(
            strtolower($rangoExperienciaLaboral) == 'Menos de 6 meses' || 
            strtolower($rangoExperienciaLaboral) == 'Entre 6 meses y 1 año' ||
            strtolower($rangoExperienciaLaboral) == 'Entre 1 a 4 años' || 
            strtolower($rangoExperienciaLaboral) == 'Entre 5 a 9 años' ||
            strtolower($rangoExperienciaLaboral) == 'Entre 10 a 14 años' || 
            strtolower($rangoExperienciaLaboral) == 'Entre 15 a 19 años' ||
            strtolower($rangoExperienciaLaboral) == 'Entre 20 a 24 años' || 
            strtolower($rangoExperienciaLaboral) == '25 años o más'
        )
        {
            return $rangoExperienciaLaboral;
        }

        throw new Exception("Error en Rango Experiencia Laboral", 1);   
    }
}