<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 17 - Função str_pad</title>
</head>
<body>
    <?php
        $nome = "Guanabara";
        // $novo = str_pad($nome, 30, " ", STR_PAD_LEFT);
        $novo = str_pad($nome, 30, " ", STR_PAD_RIGHT);
        // $novo = str_pad($nome, 30, " ", STR_PAD_CENTER);
        echo "Meu professor $novo é lindo";
    ?>
</body>
</html>

