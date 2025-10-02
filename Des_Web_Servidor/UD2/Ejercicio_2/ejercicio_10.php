<!DOCTYPE html>
<html lang="es_ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
                <?php        
                // igual qu eel ejercicio anterior pero a la inversa, easy           
                // bucle for, mi favorito
                for ($x = 10; $x >= 1; $x--) {
                    echo $x . " - ";
                }
                // bucle while, lo odio con todo mi ser
                $y = 10;
                while ($y >= 1) {
                    echo $y . " - ";
                    $y--;
                }
                // bucle do-while, solo me gusta para los menus, pero lo veremos mas adelante
                $z = 10;
                do {
                    echo $z . " - ";
                    $z--;
                } while ($z >= 1);
                 ?>
</body>
</html>