<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 17 - Função substr</title>
</head>
<body>
    <?php
        $site = "Curso em Vídeo";
        $sub = substr($site, 0, 5);
        // 0 é a posição que começa e 5 a quantidade de letras
        echo "$sub";
    ?>
</body>
</html>

