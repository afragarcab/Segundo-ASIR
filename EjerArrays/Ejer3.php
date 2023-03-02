<?php
    $tam = readline("Elije el tamaño del array: ");

    $array = array();
    for ($i=0;$i < $tam;$i++)
    {
        $array[$i]= rand(1, 10);
    }

    echo "Los valores del array son:\n";
    foreach($array as $valor)
    {
        echo $valor."\n";
    }

    $suma = array_sum($array);
    echo "La suma de todos los valores es: ". $suma;

    ?>