<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arreglo Aleatorio</title>
    <style>
        body {
            font-family: sans-serif;
            padding: 20px;
            color: #333;
            line-height: 1.5;
        }
        h2 {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }
        .numeros {
            font-size: 1rem;
            word-break: break-all;
        }
    </style>
</head>
<body>

    <h2>Números generados:</h2>
    <div class="numeros">
        <?php
        $numeros = [];

        for ($i = 0; $i < 50; $i++) {
            $numeros[] = rand(1, 100);
        }

        echo implode(', ', $numeros);
        ?>
    </div>

</body>
</html>