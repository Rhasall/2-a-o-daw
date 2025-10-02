<!DOCTYPE html>
<html lang="es_ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php  
            //primera tabla

            echo "<table border='1'>"; //para ponerle bordes a la tabla esto sera comun en todos los ejemplos
            echo "<tr>
                    <th>numero</th><th>su cuadrado</th>
                </tr>";
                //pongo encabezado

            for ($x = 1; $x <= 5; $x++) { //comiensza el bucle y pondra etiqueta <tr> y <td> por cada iteraccion
                echo "<tr>
                        <td>$x</td>
                        <td>" . ($x * $x) . "</td>
                      </tr>";
            }
            echo "</table><br>"; //cierro tabla y salto de linea

    // segunda tabla , todo igual pero cambiando el tipo de bucle
    echo "<table border='1'>";
    echo "<tr>
            <th>numero</th><th>su cuadrado</th>
          </tr>";

    $y = 1; //inicializo variable
    while ($y <= 5) {
        echo "<tr>
                <td>$y</td>
                <td>" . ($y * $y) . "</td>
              </tr>";
        $y++;
    }

    echo "</table><br>";

    // tercera tabla, mas de lo mismo pero con otro bucle

    echo "<table border='1'>";
    echo "<tr>
            <th>numero</th><th>su cuadrado</th>
        </tr>";

    $z = 1;//inicializo variable

    do //minimo entro al bucle una vez
    {
        echo "<tr>
                <td>$z</td>
                <td>" . ($z * $z) . "</td>
             </tr>";
        $z++;
    } 
    while ($z <= 5); //continuo mientras se cumple la condicion

    echo "</table>";
         ?>
</body>
</html>