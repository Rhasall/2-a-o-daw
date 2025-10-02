<!DOCTYPE html>
<html lang="es_ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
                <?php           
                $letra1 = 'o';
                $letra2='q';
                if ($letra1 == 'a' || $letra1 == 'e' || $letra1 == 'i' || $letra1 == 'o' || $letra1 == 'u') {
                    echo "la letra '$letra1' es una vocal<br>";
                } else {
                    echo "la letra '$letra1' no es una vocal<br>";
                }
                
                // ahora el otro caso para comprobar que funca

                if ($letra2 == 'a' || $letra2 == 'e' || $letra2 == 'i' || $letra2 == 'o' || $letra2 == 'u') {
                    echo "la letra '$letra2' es una vocal<br>";
                } else {
                    echo "la letra '$letra2' no es una vocal<br>";
                }
                ?>
</body>
</html>