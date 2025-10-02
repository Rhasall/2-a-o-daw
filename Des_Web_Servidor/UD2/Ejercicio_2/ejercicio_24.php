<!DOCTYPE html>
<html lang="es_ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php  
                    echo "<table border='1'>";
                    $contador = 1; // creo e inicio una variable que me servira de contador para recorrer

                    //hago una tabla de 9x10 para poner numeros del 1 al 90

                    for ($fila = 1; $fila <= 9; $fila++) //primer bucle me hace las filas
                        {
                        echo "<tr>"; //salto de linea por iteracion

                        for ($columna = 1; $columna <= 10; $columna++) //bucle anidado para la columna
                            {
                            if ($contador <= 90) { //relleno numeros en la columna mientras no llegue al 90
                                echo "<td>$contador</td>";
                                $contador++; //aumento el contador
                            }
                        }
                        echo "</tr>";
                    }

                    echo "</table>";
         ?>
</body>
</html>