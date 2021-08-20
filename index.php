<?php
declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use 
src\{
Trabajador,
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
RangoTiempoEnPuesto,
RangoExperienciaLaboral};

/*
Ejemplo de uso sin Clase factory
*/

$trabajador = new Trabajador(
    new Sexo('Hombre'),
    new Edad(18),
    new RangoDeEdad(new Edad(18)),
    new EstadoCivil('Soltero'),
    new NivelDeEstudios('Primaria'),
    new Ocupacion('Ayudante'),
    new Departamento('Mantenimiento'),
    new TipoDePuesto('Operativo'),
    new TipoDeContratacion('Tiempo indeterminado'),
    new TipoDePersonal('Ninguno'),
    new TipoDeJornada('Fijo mixto (combinación de nocturno y diurno)'),
    new RealizaRotacion('Sí'),
    new RangoTiempoEnPuesto('Menos de 6 meses'),
    new RangoExperienciaLaboral('Menos de 6 meses')

);

echo $trabajador->rangoDeEdad();

