<?php

$fechaHoraActual = date('Y-m-d H:i:s');

$fechaHoraObjetivo = '2024-10-27 08:00:00';

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <script defer src="script.js"></script>

    <title>Temporizador</title>

</head>

<body data-tiempoactual="<?= $fechaHoraActual ?>" data-tiempoobjetivo="<?= $fechaHoraObjetivo ?>">

    <div class="cloader">
        <div class="clface">
            <div class="clsface">
                <div id="h2" class="hand"></div>
            </div>
            <div class="top"></div>
            <div class="bottom"></div>
            <div class="left"></div>
            <div class="right"></div>
            <div id="sub" class="pin"></div>
            <div id="h1" class="hand"></div>
            <div id="main" class="pin"></div>
        </div>
    </div>

    <main id="container">

        <img src="uruguay.svg" alt="Bandera" id="bandera">

        <h1 id="temporizador"></h1>

    </main>

</body>

</html>