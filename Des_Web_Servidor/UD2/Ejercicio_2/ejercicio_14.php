<!DOCTYPE html>
<html lang="es_ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
                <?php        
                $numero = 12345; // inicio una variable con numero de prueba
                $contador = 0; // para contar las cifras
                $temporal = $numero; // variable temporal para no modificar el original

    // uso for para contar mientras el número sea mayor que 0
    for (; $temporal > 0; $temporal = (int)($temporal / 10)) { //estoy obligado a castear, para no comerme decimales
        //voy dividiendo cada iteracion y asi saco las cifras por cada iteracion
        $contador++; // aumentoel contador
    }

    echo "El numero $numero tiene $contador cifras";
    ?>
</body>
</html>