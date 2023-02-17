<?php
$mes = readline ("Introduce número mes del año:  ");
$anio = readline ("Introduce año:  ");

//$duracion = 0;

$dias = mesAnio($mes,$anio);

print "El mes ".$mes." tiene ".$dias." dias.";

function mesAnio($paramMes, $paramAnio)
{
    $duracion = 0;

    if($paramMes == 2)
    {
        if (esBisiesto($paramAnio))
        {
            $duracion = 29;
        }else 
        {
            $duracion = 28;
        }
    } else if ($paramMes == 4 || $paramMes== 6 || $paramMes == 9 || $paramMes == 11)
    {
        $duracion = 30;
    } else 
    {
        $duracion = 31;
    }
    return $duracion;
}

function esBisiesto($anyo)
{
    //$bisiesto = false; No lo pongo porque ya está en la condición
   if (($anyo % 400 == 0) || 
    ($anyo % 4 == 0 && $anyo % 100 != 0))
    {
        $bisiesto = true;
    } else
    {
        $bisiesto = false;
    }
    return $bisiesto;
}