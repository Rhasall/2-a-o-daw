<!DOCTYPE html>
<html lang="es_ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PALIZA MENTAL MEZCLANDO PHP CON JS EN UN HTML</title>
</head>
<body>
    <?php
    $numeroSecreto = 42; // numero secreto en PHP
    $maxIntentos = 6;
    ?>

    <script>
        // como se parecia mucho php y js en el tema de los bucles, opto por hacerlo asi mezclando el contenido de las otras
        //asignaturas, porque quiero probarlo en navegardor con xaamp
        //este fue el unico modo de meterlo sin usar terminal
        const numeroSecreto = <?php echo $numeroSecreto; ?>; // pasamos la variable PHP a JS
        const maxIntentos = <?php echo $maxIntentos; ?>;

        for (let intento = 1; intento <= maxIntentos; intento++) {
            let adivinanza = parseInt(prompt(`Intento ${intento}: Adivina un número entre 1 y 100`));

            if (adivinanza === numeroSecreto) {
                alert(`Bien, adivinaste el numero en el intento ${intento}.`);
                break;
            } else if (adivinanza < numeroSecreto) {
                alert("Te quedaste corto.");
            } else {
                alert("Te pasaste.");
            }

            if (intento === maxIntentos) {
                alert(`Se acabaron los intentos. El numero era ${numeroSecreto}.`);
            }
        }
        //toda una fumada, pero funciona. espero que tengas en cuenta el esfuerzo extra
    </script>
</body>
</html>