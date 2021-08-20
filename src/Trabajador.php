<?php
namespace src;

use 
Sexo,
Edad,
RangoDeEdad,
EstadoCivil,
NivelDeEstudios,
Ocupacion, 
Departamento,
TipoDePuesto,
TipoDeContratacion,
TipoDePersonal,
TipoDeJornada,
RealizaRotacion,
TiempoEnPuesto,
RangoTiempoEnPuesto,
ExperienciaLaboral,
RangoExperienciaLaboral; 

class Trabajador
{
    private $_sexo;
    private $_edad;
    private $_rangoDeEdad;
    private $_estadoCivil;
    private $_nivelDeEstudios;
    private $_ocupacion;
    private $_departamento;
    private $_tipoDePuesto;
    private $_tipoDeContratacion;
    private $_tipoDePersonal;
    private $_tipoDeJornada;
    private $_realizaRotacion;
    private $_tiempoEnPuesto;
    private $_rangoTiempoEnPuesto;
    private $_experienciaLaboral; 
    private $_rangoExperienciaLaboral;     

    public function __construct
    (
        Sexo $Sexo,
        Edad $Edad,
        RangoDeEdad $RangoDeEdad,
        EstadoCivil $EstadoCivil,
        NivelDeEstudios $NivelDeEstudios,
        Ocupacion $Ocupacion,
        Departamento $Departamento,
        TipoDePuesto $TipoDePuesto,
        TipoDeContratacion $TipoDeContratacion,
        TipoDePersonal $TipoDePersonal,
        TipoDeJornada $TipoDeJornada,
        RealizaRotacion $RealizaRotacion,
        TiempoEnPuesto $TiempoEnPuesto,
        RangoTiempoEnPuesto $RangoTiempoEnPuesto,
        ExperienciaLaboral $ExperienciaLaboral,
        RangoExperienciaLaboral $RangoExperienciaLaboral
    )
    {
        $this->_sexo = $Sexo;
        $this->_edad = $Edad;
        $this->_rangoDeEdad = $RangoDeEdad;
        $this->_estadoCivil = $EstadoCivil;
        $this->_nivelDeEstudios = $NivelDeEstudios;
        $this->_ocupacion = $Ocupacion;
        $this->_departamento = $Departamento;
        $this->_tipoDePuesto = $TipoDePuesto;
        $this->_tipoDeContratacion = $TipoDeContratacion;
        $this->_tipoDePersonal = $TipoDePersonal;
        $this->_tipoDeJornada = $TipoDeJornada;
        $this->_realizaRotacion = $RealizaRotacion;
        $this->_tiempoEnPuesto = $TiempoEnPuesto;
        $this->_rangoTiempoEnPuesto = $RangoTiempoEnPuesto;
        $this->_experienciaLaboral = $ExperienciaLaboral;
        $this->_rangoExperienciaLaboral = $RangoExperienciaLaboral;
    }

    public function sexo(): string
    {
        return $this->_sexo->sexo();
    }

    public function edad(): int
    {
        return $this->_edad->edad();
    }

    public function rangoDeEdad(): string
    {
        return $this->_rangoDeEdad->rangoDeEdad();
    }

    public function estadoCivil(): string
    {
        return $this->_estadoCivil->estadoCivil();
    }

    public function nivelDeEstudios(): string
    {
        return $this->_nivelDeEstudios->nivelDeEstudios();
    }

    public function ocupacion(): string
    {
        return $this->_ocupacion->ocupacion();
    }
    
    public function departamento(): string
    {
        return $this->_departamento->departamento();
    }

    public function tipoDePuesto(): string
    {
        return $this->_tipoDePuesto->tipoDePuesto();
    }

    public function tipoDeContratacion(): string
    {
        return $this->_tipoDeContratacion->tipoDeContratacion();
    }

    public function tipoDePersonal(): string
    {
        return $this->_tipoDePersonal->tipoDePersonal();
    }

    public function tipoDeJornada(): string
    {
        return $this->_tipoDeJornada->tipoDeJornada();
    }

    public function realizaRotacion(): string
    {
        return $this->_realizaRotacion->realizaRotacion();
    }

    public function tiempoEnPuesto(): int
    {
        return $this->_tiempoEnPuesto->tiempoEnPuesto();
    }

    public function rangoTiempoenPuesto(): string
    {
        return $this->_rangoTiempoEnPuesto->rangoTiempoenPuesto();
    }

    public function experienciaLaboral(): int
    {
        return $this->_experienciaLaboral->experienciaLaboral();
    }

    public function rangoExperienciaLaboral(): string
    {
        return $this->_rangoExperienciaLaboral->rangoExperienciaLaboral();
    }

}