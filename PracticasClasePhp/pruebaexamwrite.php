<?php

//Va a repetir el simbolo las veces que le digamos 

function suSimbolo($num, $simb)
{
  for ($i=0; $i < $num; $i++)
  {
    print $simb;
  }
}

$num = readline("Elije el tamaño para el arbol: ");

for ($i=1; $i <= $num; $i++)
{
  suSimbolo($i,"*");
  echo "\n";
}
//suSimbolo($num, $simb);