<!DOCTYPE html>
<html lang="es_ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
                  <?php           
                    $numero = 20; //inicio la variable con un numero par
                    //$numero = 23; //inicio la variable con un numero impar
                    if ($numero %2==0) { //compruebo si es par
                        echo "el numero $numero es par";
                    } else { //si no es par, es impar
                        echo "el numero $numero es impar";
                    }
                    ?>
</body>
</html>