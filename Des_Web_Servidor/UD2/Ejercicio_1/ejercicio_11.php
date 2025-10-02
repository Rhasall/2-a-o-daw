<!DOCTYPE html>
<html lang="es_ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
            <?php           
                        $diasTerrestresUnAnyo = 365; //defino los dias de año terrestre
                        $anyosTerrestreJupiter = 12; //defino los años que equivalen a 1 año de jupiter
                        $diasTerrestres = 200; // Defino los días terrestres que quiero convertir
                        $anyosTerrestres = $diasTerrestres / $diasTerrestresUnAnyo; //convierto los dias terrestres en años
                        $anyosJovianos = $anyosTerrestres / $anyosTerrestreJupiter; //convierto años terrestres a años de jupiter
                        // toca imprimir
                        echo "$diasTerrestres días terrestres equivalen a $anyosJovianos años en jupiter";
            ?>
</body>
</html>