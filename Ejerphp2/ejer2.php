<?php
    /*Escribe un programa que lea dos números y escriba el valor de su producto y el de su
división.*/

$num1 = readline("Introduce un número: ");
$num2 = readline("Introduce otro número: ");

$multiplicar = $num1 * $num2;
$division = $num1 / $num2;

echo "El producto es: ".$multiplicar."\n";
echo "La división es: ".$division;
?>