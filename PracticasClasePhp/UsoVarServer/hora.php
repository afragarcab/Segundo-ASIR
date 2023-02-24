<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hora</title>
</head>
<body>
    <?php
    $hora = date('H');
    ?> 
    <h1>Son las <?php echo $hora?></h1>
    
    <?php
    if ($hora >= 6 && $hora < 12) 
    {
        print ("<span>Buenas dias!!</span>");
    } else if ($hora >= 12 && $hora < 20)
    {
        print ("<span>Buenas tardes!!</span>");
    } else
    {
        print ("<span>Buenas noches!!</span>");
    }
    ?> 

</body>
</html>