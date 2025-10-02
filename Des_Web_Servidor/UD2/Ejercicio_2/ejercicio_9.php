<!DOCTYPE html>
<html lang="es_ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
                <?php          
                // bucle for, mmi favorito
                for ($x = 1; $x <= 10; $x++) {
                echo $x . " - ";
                }
                // bucle while, lo odio con todo mi ser
                $y = 1;
                while ($y <= 10) {
                    echo $y . " - ";
                    $y++;
                }
                // Bucle do-while, solo me gusta para los menus, pero lo veremos mas adelante
                $z = 1;
                do {
                    echo $z . " - ";
                    $z++;
                } while ($z <= 10);
                 ?>
</body>
</html>