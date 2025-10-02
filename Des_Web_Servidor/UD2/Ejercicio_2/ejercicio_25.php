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

    // Bucle para filas (0 a 10)
    for ($fila = 0; $fila <= 11; $fila++) 
        {
        echo "<tr>";
        // Bucle para columnas (0 a 10)
        for ($columna = 0; $columna <= 11; $columna++) 
        {
            // primera fila o primera columna como encabezado
            if ($fila == 0 && $columna == 0) {
                echo "<th style='background-color:blue;color:white;'>x</th>"; //condicion para la cordenada 0-0, la x
            } 
            elseif ($fila == 0) {
                echo "<th style='background-color:blue;color:white;'>".$columna-1 ."</th>"; //si estoy en la primera fila pinto de azul (horizontal)
            } 
            elseif ($columna == 0) {
                echo "<th style='background-color:orange;color:white;'>".$fila-1 ."</th>";//si estoy en la primera columna pinto de naranja (vertical)
                }
             
            elseif ($columna == 1) {  //pongo en la columna 1 todo ceros
                    echo"<td>"."0"."</td>";}
                    
            elseif ($fila == 1) {    //pongo en la fila 1 todo ceros
                    echo"<td>"."0"."</td>";
            }
            else { // lo que no sea ni fila ni columna 1, relleno con las multiplicaciones de la tabla, pero pongo menos 1 para no tener en cuenta los ceros
                    echo "<td>" . (($fila-1)* ($columna-1)) . "</td>";
                }
        }
        }
        echo "</tr>";
    echo "</table>";
         ?>
</body>
</html>