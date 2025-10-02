<!DOCTYPE html>
<html lang="es_ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
            <?php
                $segundos = 60; //declaro los segundos en la variable
                $minutos= 60; //declaro los minutos en la variable
                $horas= 24; //declaro las horas en la variable
                $dias = 365; //declaro los dias en la variable
                $totalSegundos= $segundos*$minutos*$horas* $dias; //hago la formula para calcularlos
                echo "Un año tiene $totalSegundos segundos"; // imprimo el resultado
            ?>

</body>
</html>