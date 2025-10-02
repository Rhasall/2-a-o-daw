<!DOCTYPE html>
<html lang="es_ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
                <?php
                // la solucion es meter un bucle dentro de otro bucle
                for ($x = 1; $x <= 5; $x++) 
                { 
                    // bucle interno para imprimir asteriscos por fila
                    for ($y = 1; $y <= $x; $y++) {
                        echo "*";
                    }

            echo "<br>"; // salto de linea para pasar a la siguiente linea
                }        
                
                ?>
</body>
</html>