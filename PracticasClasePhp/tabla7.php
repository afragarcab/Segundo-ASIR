<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla del 7</title>
</head>
<body>

    <h1>Vamos a tener la tabla del 7</h1>

    <?php

    $num = 7;
    for ($i=0;$i <= 100;$i++)
    {
        $x = $num * $i;
        echo "<tr><td>$num x $i </td><td>$x</td></tr> </br>";
    }
    ?>
    
</body>
</html>