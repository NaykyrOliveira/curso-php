<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 17 - Função strpos</title>
</head>
<body>
    <?php
        $frase = "Estou aprendendo PHP";
        $pos = strpos($frase, "PHP");
        echo "$frase <br> A string PHP foi encontrada na posição $pos";
        ?>
</body>
</html>