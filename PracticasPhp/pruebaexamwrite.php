<?php

//Va a repetir el simbolo las veces que le digamos 
function suSimbolo($num, $simb)
{
  for ($i=0;$i < $num; $i++)
  {
    print $simb;
  }
}

suSimbolo(5, "%");