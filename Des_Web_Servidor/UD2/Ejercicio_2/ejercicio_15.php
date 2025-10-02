<!DOCTYPE html>
<html lang="es_ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
                <?php        
                $numero = 18;
                $contador = 0; // contador de letras A

                for ($x = 1; $x <= 50; $x++) { //pongo tope de 50 en el bucle
                    echo "A "; // imprimo la letra A
                    $contador++; // aumento el contador

                    if ($contador == $numero) { // si ya lleggue el tpe de mi numero sin llegar al 50
                        break; // salgo del bucle
                    }
                }
                ?>
</body>
</html>