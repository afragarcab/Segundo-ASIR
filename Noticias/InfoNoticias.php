<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias</title>
</head>
<body>
    <?php
        $direccion = "192.168.48.28";
        $usuario = "pruebas";
        $password = "pruebas";
        $nombreBD = "pruebas";

        $sentenciaSQL = "SELECT titulo,texto FROM noticias";
        $conexion = mysqli_connect($direccion,$usuario,$password,$nombreBD);
        $result = mysqli_query($conexion, $sentenciaSQL);



        if (mysqli_num_rows($result) > 0)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                echo "<div><h1>". $row["titulo"]."</h1>"."<p>". 
                $row["texto"]."</p>"."<a href>". "</div>";
            }
        } else
        {
            echo "0 results";
        }
    ?>

</body>
</html>