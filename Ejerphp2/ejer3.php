<?php
    /*3. Escribe un programa que lea dos números y escriba el mayor o indique si son iguales.*/

$num1 = readline("Introduce un número:  ");
$num2 = readline("Introduce otro número: ");

if ($num1 > $num2)
{
    echo "El número ".$num1." es mayor" ;
} else if ($num2 > $num1)
{
    echo "El número ".$num2." es mayor" ;

}else if ($num1 == $num2)
{
    echo "Los números son iguales" ;
}
