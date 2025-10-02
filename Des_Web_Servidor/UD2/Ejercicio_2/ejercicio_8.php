<!DOCTYPE html>
<html lang="es_ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
                <?php          
                $num1 = 5;
                //$num1=-80; //otro numero para las pruebas
                $num2 = -3;
                //$num2 = 10; //otro numero para las pruebas

    if ($num1 > 0 && $num2 > 0) 
        {
        // me comprueba que ambos son positivos
        echo "los dos numeros son positivos";
        } 
        elseif ($num1 > 0 || $num2 > 0) 
        {
        // Solo uno es positivo
        echo "uno de los numeros es positivo";
        } 
    else 
    {
    // ninguno positivo
    echo "ninguno de los numeros es positivo";
    }
                ?>
</body>
</html>