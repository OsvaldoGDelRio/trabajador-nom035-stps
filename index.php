<?php
declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

//Para la clase trabajador
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

//Para la clase que convierte datos a texto y numero para base de datos y formularios

use src\ValoresParaBaseDeDatosTrabajador;

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

echo $trabajador->sexo().'<br>';

/*
Ejemplo convirtiendo datos de texto a número y viceversa
*/


$valores = new ValoresParaBaseDeDatosTrabajador;

//Convertir de texto a número para la clase Sexo

echo $sexoNumero = $valores->textoANumero('sexo', $trabajador->sexo()).'<br>';

//Conviertiendo el mismo a valor de número a texto

echo $valores->numeroATexto('sexo', $valores->textoANumero('sexo',$trabajador->sexo())).'<br>';