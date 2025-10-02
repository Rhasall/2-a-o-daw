<!DOCTYPE html>
<html lang="es_ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

    // bucle para las tablas del 1 al 10
    for ($tabla = 1; $tabla <= 10; $tabla++) { //establezco el tope en 10
        echo "Tabla del $tabla <br>"; // título de la tabla
        echo "*********<br>"; // salto de linea con los asteriscos

        // bucle dentro del bucle (anidado) para multiplicar del 1 al 10
        for ($x = 1; $x <= 10; $x++) {
            $resultado = $tabla * $x; // calculo resultado
            echo "$tabla x $x = $resultado<br>"; // imprimo y salto de linea
        }

        echo "<br>"; // salto de linea entre tablas
    }       
                
    ?>

</body>
</html>