<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla del 7</title>

    <style>
        table {
            display:inline-block;
            margin: 5px 20px;
        }
    </style>
</head>
<body>

    <h1>Vamos a tener la tabla del 7</h1>
    <table>
    <?php

            //$num = 7;
            //$i==25 || $i==50 || $i==75 Estp es para el if
            for ($i=1;$i<=100;$i++)
            {
                print "<tr><td>7 &times; ". $i . " = ". $i*7 ."</td></tr>";
                if ($i%25==0)
                {
                    print "</table>\n<table>\n";
                }
            }
            ?>
    </table>
    
</body>
</html>