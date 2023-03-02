<?php
    //Array vacio
    $array = array();

    //Pedir 10 números y almacenarlos en el array:
    for ($i=0;$i<10;$i++)
    {
        $numero = readline("Introduce un número: ");
        $array[$i] = $numero;
    }

    //Muestro en pantalla el indice y el valor de cada elemento del array
    for ($i=0;$i<10;$i++)
    {
        echo "El elemento en la posición ".$i." es: ". $array[$i]. "\n";
    }

?>