<!DOCTYPE html>
<html lang="es_ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
                <?php        
                $letra = 'g';
                //$letra = 'e'; // variable para pruebas
                //$letra = '25'; // variable para pruebas

    // primero verifico si es una cifra
    if ($letra >= '0' && $letra <= '9') {
        echo "$letra es una cifra";
    }
    // luego verifico si es vocal
    else if ($letra == 'a' || $letra == 'e' || $letra == 'i' || $letra == 'o' || $letra == 'u') {
        echo "$letra es una vocal";
    }
    // si no es cifra ni vocal, es consonante
    else {
        echo "$letra es una consonante";
    }
    ?>
</body>
</html>