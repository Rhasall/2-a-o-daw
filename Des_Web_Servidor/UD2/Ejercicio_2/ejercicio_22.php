<!DOCTYPE html>
<html lang="es_ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php  
            $logueado = true;
            //$logueado=false;//prueba para comprobar

            if ($logueado==true) {
                echo "<h1>Bienvenido de nuevo</h1>";
                echo "<p>este contenido es para usuarios registrados</p>";
            } 
            else {
                echo "<h1>por favor, inicia sesion</h1>";
                echo "<p>crea una cuenta, o ingresa para acceder a mas contenido</p>";
            }
         ?>
</body>
</html>