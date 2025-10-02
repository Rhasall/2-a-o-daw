<!DOCTYPE html>
<html lang="es_ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
                  <?php           
                    $edad = 20; //inicio la variable con un numero que sera mayor de edad
                    if ($edad >= 18) { //compruebo si es mayor de edad
                        echo "Con $edad años eres mayor de edad, todo un abuelete";
                    } else { //si no es mayor de edad, salta este mensaje
                        echo "Con $edad años eres menor de edad, sigues siendo un bebe.";
                    }
                    ?>
</body>
</html>