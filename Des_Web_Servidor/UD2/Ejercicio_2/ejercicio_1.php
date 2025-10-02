<!DOCTYPE html>
<html lang="es_ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
                  <?php
                    
                    $numero1 = 74; //inicio la variable con cualquier numero     
                    $numero2 = 73; //para probar que no me dice nada si es impar             
                    if ($numero1 % 2 == 0) { // verifico si es par
                        echo "el numero $numero1 es par";
                    }
                    if ($numero2 % 2 == 0) { // verifico si es par
                        echo "el numero $numero2 es par";
                    }
                    ?>
</body>
</html>