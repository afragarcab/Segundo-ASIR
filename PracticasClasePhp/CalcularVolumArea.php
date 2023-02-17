<?php

$radio = readline ("Introduce el radio: ");
$altura = readline ("Introduce la altura: ");

//print volumenCilindro($radio, $altura);
print volumenCono($radio, $altura);
//volumenCilindro($radio);

//PHP_INIT_MIN es una constante que permite escribir el número mas bajo posible

//foreach es un bucle que accede a todos los elementos del array

//count es una funcion que te devuelve el tamaño de un array
//$tam = count($array):


function volumenCilindro($rad, $altu)
  {
    $volumen = areaCirculo($rad) * $altu;
    return $volumen;
  }

function volumenCono($rad, $altu)
  {
      $volumen = volumenCilindro($rad, $altu) / 3;
      return $volumen;
  }

function areaCirculo($rad) 
{
    $area = 3.14159 * ($rad * $rad);
    return $area;
}