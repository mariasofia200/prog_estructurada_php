<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables y constantes en php</title>
</head>
<body>
   <h1>Variables y constantes en php</h1> 
   <?php
   // Las variables se representan enteponiendo el simbolo $ a la palabraque se use como variable
   // PHP es sensitive case
   // las variables no pueden empezar con un numero 
   // En PHP no es necesario especificar el tipo de varable pero si se debe sabr cuando utilizar las comillas para el caso de variables de tipo cadenao string

   // Asignamos a la variabe a el valor 5
    $a = 5;

    //Asignamos a la variable b el valor 7 como cadena
    $b = "7";
    
    echo "<h2>Variables</h2>";

    //Mostrar el valor de la variable a
    echo ($a);

    echo "<br>";

    //Mostrar el valor de la variable b
    echo($b);

    echo "<br>";

    "<h2>constantes</h2>";
    /*EL valor de una constante no cambia o se mantiene fijo durante la ejecucion de una pagina*/

    /*la forma de escribir las constantes en php, es mediante el uso de la instruccion define*/


    //creamos una constante  llamada capital_colombia, cuyo valor s bogota
    define("capital_colombia", "Bogota");
   ?>
</body>
</html>