<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESULTADO</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
</head>

<body>

    <main>
        <?php
        $numero = $_GET["numero"] ?? 0;

        $sucessor = $numero + 1;
        $antecessor = $numero - 1;

        echo "SEU SUCESSOR É <strong>$sucessor</strong> <br> \n";
        echo "SEU ANTECESSOR É <strong>$antecessor</strong> <br> \n";

        ?>

        <button><a href="index.html">&#128072; VOLTAR PÁGINA</a></button>

    </main>

</body>

</html>