<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operadores</title>
</head>
<body>
    <h1>operadres</h1>

    <h2>Aritmeticos</h2>
    <?PHP
        $x = 9;
        $y = 3;
        $z = 5;

        $suma = $x + $y;
        $resta = $x - $z;

        echo "La suma es:". $suma;
    ?>

        <h2>de operacion </h2>

    <?php
        $x = 9;
        $y = 3;
        
        echo ($x == $y);
    ?>

    <h2>logicos</h2>

<?php
    $x = 9;
    $y = 3;
    
    if($x == 9 && $y ==3);
    {
        echo"Estas en lo correcto"
    }
?>

<h2>De unio de cadenas</h2>

<?php
    $nombre = "nestor";
    $apellidos = "paez";
    
    $nombre_completo = $nombre." ".$apellido;
  
    echo $nombre_completo;
?>
</body>
</html>