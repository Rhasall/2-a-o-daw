<!DOCTYPE html>
<html lang="es_ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        //primera parte, la superior

         for ($x = 1; $x <= 7; $x++)
        { //condicion para imprimir solo si es par
                if($x %2!=0)
                {
                    for ($i = 7; $i > $x; $i--) 
                    {echo "&nbsp;";} // encontre esta juyita en internet para los espacios, menuda fumadas
                        // bucle interno para imprimir asteriscos por fila
                    for ($y = 1; $y <= $x; $y++) {
                        echo "*";
                    }
                }
                else //asi lo que hago es que si es par, me salto el imprimir
                { 
                    continue;
                }

            echo "<br>"; // salto de linea para pasar a la siguiente linea
        }

        // segunda parte, la inferior, es repetir pero disminuyendo en lugar de x++ es x-- partiendo de 5
        for ($x = 5; $x >= 1; $x--) 
        { 
            if ($x % 2 != 0) 
            {
                for ($i = 7; $i > $x; $i--) 
                    {echo "&nbsp;";}
                for ($y = 1; $y <= $x; $y++) {
                    echo "*";
                }
                echo "<br>";
            } 
            else 
            {
                continue;
            }
        }          
    ?>

</body>
</html>