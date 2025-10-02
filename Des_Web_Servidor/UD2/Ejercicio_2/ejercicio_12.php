<!DOCTYPE html>
<html lang="es_ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
                <?php        
                $suma = 0; //inicializo la variable para usarlo de "contenedor" de suma
                for ($x = 1; $x <= 30; $x++) 
                {
                    if ($x % 2 == 0) { // compruebo para pillar solo los pares
                        $suma += $x; // sumo el numero a la variable y asi actualizo valores 
                        // esto es lo mismo que suma=suma+suma
                    }
                }

                echo "la suma total de los numeros pares del 1 al 30 es: " . $suma;
                ?>
</body>
</html>