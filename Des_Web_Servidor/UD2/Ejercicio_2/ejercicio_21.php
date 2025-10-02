<!DOCTYPE html>
<html lang="es_ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php  
                //$mes = 1; //pruebas para probar
                //$mes = 4; //pruebas para probar
                $mes = 2;
                $año = 2024;
                //$año = 2025; //pruebas para probar

            // compruebo el mes que se seleccion con if, else if y else
            if ($mes == 1 || $mes == 3 || $mes == 5 || $mes == 7 || $mes == 8 || $mes == 10 || $mes == 12) {
                echo "el mes $mes del año $año tiene 31 dias";
            } 
            else if ($mes == 4 || $mes == 6 || $mes == 9 || $mes == 11) {
                echo "el mes $mes del año $año tiene 30 dias";
            } 
            else if ($mes == 2) { //condicion especial para fecbrero
                //l aparte jodida, ver si es bisiesto, no te mentire, necesite verlo en internet porque por mi cuenta este calculo no me salia
                if (($año % 4 == 0 && $año % 100 != 0) || ($año % 400 == 0)) {
                    echo "el mes $mes de este año en concreto,  $año tiene 29 dias por ser bisiesto";
                } 
                else {
                    echo "el mes $mes del año $año tiene 28 dias";
                }
            } 
            else{echo"ese mes no me vale";}
         ?>
</body>
</html>