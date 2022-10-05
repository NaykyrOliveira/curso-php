<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 17 - Função str_repeat</title>
</head>
<body>
    <?php
        $frase = "Eu gosto de estudar Matemática! Matemática é muito legal!";
        $novaFrase = str_replace("Matemática", "PHP", $frase);
        // $novaFrase = str_ireplace("matemática", "PHP", $frase);
        echo $novaFrase;
    ?>
</body>
</html>

