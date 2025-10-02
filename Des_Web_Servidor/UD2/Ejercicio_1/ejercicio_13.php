<!DOCTYPE html>
<html lang="es_ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
            <?php
                    $tabla=2;
                    $multiplicador=1;
                    echo "Tabla del 2<br>"; //imprimo para que me muestre titulo de tabla de 2 y salto de linea con /n
                    echo "**********<br>";
                    $resultado= $tabla*$multiplicador;
                    echo "2X1 = $resultado <br>";
                    $multiplicador++;
                    $resultado= $tabla*$multiplicador;
                    echo "2X2 = $resultado <br>";
                    $multiplicador++;
                    $resultado= $tabla*$multiplicador;
                    echo "2X3 = $resultado <br>";
                    $multiplicador++;
                    $resultado= $tabla*$multiplicador;
                    echo "2X4 = $resultado <br>";
                    $multiplicador++;
                    $resultado= $tabla*$multiplicador;
                    echo "2X5 = $resultado <br>";
                    $multiplicador++;
                    $resultado= $tabla*$multiplicador;
                    echo "2X6 = $resultado <br>";
                    $multiplicador++;
                    $resultado= $tabla*$multiplicador;
                    echo "2X7 = $resultado <br>";
                    $multiplicador++;
                    $resultado= $tabla*$multiplicador;
                    echo "2X8 = $resultado <br>";
                    $multiplicador++;
                    $resultado= $tabla*$multiplicador;
                    echo "2X9 = $resultado <br>";
                    $multiplicador++;
                    $resultado= $tabla*$multiplicador;
                    echo "2X10 = $resultado <br>";

                    /* no lo hemos dado pero lo mejor seria el bucle
                    for ($x = 1; $x <= 10; $x++) {    // creo el bucle para que lo recorra e imprima de forma creciente
                        $tabla = 2 * $x; // declaro la variable de la tabla a imprimir
                        echo "2 x $x = $tabla<br>"; // imprimo resultado y despues se repetira el bucle
                    }*/
            ?>
</body>
</html>