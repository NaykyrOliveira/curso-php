<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 17 - Função substr_count</title>
</head>
<body>
    <?php
        $frase = "Estou aprendendo PHP no Curso em Vídeo de PHP";
        $count = substr_count($frase, "PHP");
        echo "PHP encontrado $count vezes ";
    ?>
</body>
</html>

