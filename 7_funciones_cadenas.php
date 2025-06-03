<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones manipulación de cadenas</title>
</head>
<body>
    <h1>Funciones manipulación de cadenas</h1>

    <h2>Función substr()</h2>

    <?php
    $texto = "Hola Mundo";
    echo substr($texto, 5);
    // Resultado: Mundo
    ?>

    <h2>Función ord()</h2>

    <?php
    $letra = "A";
    echo ord($letra);
    // Resultado: 65
    ?>

    <h2>Función printf()</h2>

    <?php
    $nombre = "Luis";
    $edad = 30;
    printf("Mi nombre es %s y tengo %d años.", $nombre, $edad);
    // Resultado: Mi nombre es Luis y tengo 30 años.
    ?>    

    <h2>Función sprintf()</h2>

    <?php
    $precio = 10.5;
    $texto = sprintf("El precio es %.2f euros.", $precio);
    echo $texto;
    // Resultado: El precio es 10.50 euros.
    ?>    

    <h2>Función strtolower()</h2>

    <?php
    $texto = "HOLA MUNDO";
    echo strtolower($texto); // Resultado: hola mundo
    ?>    

    <h2>Función strtoupper()</h2>

    <?php
    $texto = "hola mundo";
    echo strtoupper($texto); // Resultado: HOLA MUNDO
    ?>    


    <h2>Función strtolower()</h2>

    <?php
    $nombre = "JuAn CaRLoS";
    $nombre_minusculas = strtolower($nombre);
    echo $nombre_minusculas; // Resultado: juan carlos
    ?>


    <h2>Función ereg()</h2>

    <h2>Función eregi()</h2>


</body>
</html>
