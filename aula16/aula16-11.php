<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 16 - Função implode</title>
</head>
<body>
    <?php
        $vetor [0] = "Curso";
        $vetor [1] = "em";
        $vetor [2] = "Vídeo";
        $texto = implode("#", $vetor);

        print($texto);
        ?>
</body>
</html>

