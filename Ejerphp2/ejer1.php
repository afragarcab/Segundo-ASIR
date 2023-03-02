<?php
/*Escribe un programa que lea un número desde el teclado y escriba en pantalla si es
positivo, negativo o nulo.*/

$num = readline("Introduce número positivo o negativo: ");

if ($num >= 1)
{
    echo "¡El número es positivo!";
} else if ($num <= -1)
{
    echo "¡El número es negativo!";
} else
{
    echo "EL número es nulo";
}
?>