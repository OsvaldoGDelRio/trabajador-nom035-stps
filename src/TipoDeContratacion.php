<?php
namespace src;

use Exception;

class TipoDeContratacion
{
    private string $_tipoDeContratacion;

    public function __construct(string $tipoDeConstratacion)
    {
        $this->_tipoDeContratacion = $this->setTipoDeContratacion($tipoDeConstratacion);
    }

    public function tipoDeContratacion(): string
    {
        return $this->_tipoDeContratacion;
    }

    private function setTipoDeContratacion(string $tipoDeConstratacion): string
    {
        if(
            $tipoDeConstratacion == 'Por obra o proyecto' || 
            $tipoDeConstratacion == 'Por tiempo determinado (temporal)' ||
            $tipoDeConstratacion == 'Tiempo indeterminado' || 
            $tipoDeConstratacion == 'Honorarios'
        )
        {
            return $tipoDeConstratacion;
        }

        throw new Exception("Error en Tipo de Contratación", 1);  
    }
}