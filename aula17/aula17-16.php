<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 17 - Função strtoupper</title>
</head>
<body>
    <?php
        $nome = "gustavo Guanabara";
        $nome2 = ucfirst(strtolower($nome));
        // print("Seu nome é ".ucfirst($nome));
        echo "Seu nome é ".$nome2;
        ?>
</body>
</html>