<?php
$direccion = "192.168.48.28";
$usuario = "pruebas";
$password = "pruebas";
$nombreBD = "pruebas";

$sentenciaSQL = "SELECT titulo FROM noticias";
$conexion = mysqli_connect($direccion,$usuario,$password,$nombreBD);
$result = mysqli_query($conexion, $sentenciaSQL);



if (mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        echo "id: ". $row["titulo"].  "<br>";
    }
} else
{
    echo "0 results";
}

if ($conexion)
{
    
    //$result = mysqli_query($conexion, $sentenciaSQL);
    echo "Connected successfully";
} else
{
    print ("Connection failed: ". mysqli_connect_error());
}
mysql_close($conexion);

?>