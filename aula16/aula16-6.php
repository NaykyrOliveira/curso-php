<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 16 - Função ltrim</title>
</head>
<body>
    <?php
        $nome = "   José da Silva   ";
        echo (strlen($nome));
        $novo = ltrim($nome);
        echo ($novo);
        echo (strlen($novo));
        ?>
</body>
</html>

