<!DOCTYPE html>
<html lang="es_ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
                <?php        
                $numero = 18; // numero para descartar, es feo

    for ($x = 1; $x <= 50; $x++) { // bucle con el tope en 50
        if ($x == $numero) { // si es el numero es el que quiero descartar, lo salto
            continue; // salto esta iteracion
        }
        echo $x . " "; // imprimo
    }
                ?>
</body>
</html>