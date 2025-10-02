<!DOCTYPE html>
<html lang="es_ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
                <?php        
                for ($x = 0; $x <= 10; $x ++) 
                {
                    if ($x %2!= 0){ // pongo un if para ver qeu no sea par
                    echo $x . " - "; //al no ser par lo imprimo
                    }
                }
                 ?>
</body>
</html>