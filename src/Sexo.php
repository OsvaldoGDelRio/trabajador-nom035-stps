<?php
namespace src;

use Exception;

class Sexo
{
    private $_sexo;

    public function __construct(string $sexo)
    {
        $this->_sexo = $this->setSexo($sexo);
    }

    public function sexo(): string
    {
        return $this->_sexo;
    }

    private function setSexo(string $sexo): string
    {
        if(strtolower($sexo) == 'hombre' || strtolower($sexo) == 'mujer')
        {
            return $sexo;
        }

        throw new Exception("Error en sexo", 1);  
    }
}