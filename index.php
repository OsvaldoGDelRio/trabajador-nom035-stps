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
echo '<h1>Datos de la clase:</h1>';

echo '<p>';
echo $trabajador->sexo().'<br>';
echo $trabajador->edad().'<br>';
echo $trabajador->rangoDeEdad().'<br>';
echo $trabajador->estadoCivil().'<br>';
echo $trabajador->nivelDeEstudios().'<br>';
echo $trabajador->ocupacion().'<br>';
echo $trabajador->departamento().'<br>';
echo $trabajador->tipoDePuesto().'<br>';
echo $trabajador->tipoDeContratacion().'<br>';
echo $trabajador->tipoDePersonal().'<br>';
echo $trabajador->tipoDeJornada().'<br>';
echo $trabajador->realizaRotacion().'<br>';
echo $trabajador->rangoTiempoenPuesto().'<br>';
echo $trabajador->rangoExperienciaLaboral().'<br>';
echo '</p>';

/*
Ejemplo convirtiendo datos de texto a número y viceversa
*/

echo '<h1>Coviertiendo valores</h1>';
$valores = new ValoresParaBaseDeDatosTrabajador;

//Convertir de texto a número para la clase Sexo

echo $sexoNumero = $valores->textoANumero('sexo', $trabajador->sexo()).'<br>';

//Conviertiendo el mismo a valor de número a texto

echo $valores->numeroATexto('sexo', $valores->textoANumero('sexo',$trabajador->sexo())).'<br>';

/*
Para cambiar todos los valores de texto a número
*/
echo '<h1>Coviertiendo todos los valores de texto a número</h1>';
echo '<pre>';
print_r($valores->cambiarTodosDeTextoANumero($trabajador));
echo '</pre>';

/*
Para cambiar todos los valores de número a texto
*/
echo '<h1>Coviertiendo todos los valores de número a texto</h1>';
echo '<pre>';
print_r($valores->cambiarTodosDeNumeroATexto(
    $valores->cambiarTodosDeTextoANumero($trabajador)  
));
echo '</pre>';