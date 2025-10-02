<!DOCTYPE html>
<html lang="es_ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
                <?php          
                $num1 = 1;
                $num2 = 2;
                $num3 = 3; 
                    if ($num1 <= $num2 && $num1 <= $num3) {
                    // $el primer numero es el menor
                    // ahora procedo a ver las otras combinaciones para imprimir
                    if ($num2 <= $num3) {
                        echo "$num1, $num2, $num3";
                    } else {
                        echo "$num1, $num3, $num2";
                    }

                } elseif ($num2 <= $num1 && $num2 <= $num3) {
                    // $segundo numero es el menor
                    // ahora procedo a ver las otras combinaciones para imprimir
                    if ($num1 <= $num3) {
                        echo "$num2, $num1, $num3";
                    } else {
                        echo "$num2, $num3, $num1";
                    }
                } else {
                    // $tercer numero es el menor
                    // ahora procedo a ver las otras combinaciones para imprimir
                    if ($num1 <= $num2) {
                        echo "$num3, $num1, $num2";
                    } else {
                        echo "$num3, $num2, $num1";
                    }
                }
                ?>
</body>
</html>