<?php
    //Array com los dias de la semana:
    $dias = array("lunes","martes","miercoles","jueves","viernes","sabado","domingo");
    //Numero del 1 al 7
    $numero = readline("Numero del 1 al 7: ");

    //echo "El dia de la semana es: ". $dias[$numero-1]. ".";

    //Comprobación si el número está en el rango del 1 al 7:

    if ($numero >= 1 && $numero <=7)
    {
        echo "El dia de la semana es: ". $dias[$numero-1]. ".";
    } else 
    {
        echo "¡Debe estar en el rango seleccionado!";
    }





?>