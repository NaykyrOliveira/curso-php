<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 16 - Função str_word_count</title>
</head>
<body>
    <?php
        $frase = "Eu vou estudar PHP agora";
        $contador = str_word_count($frase, 0);

        echo $contador;

        /* $frase = "Eu vou estudar PHP agora";
        $contador = str_word_count($frase, 1);

        print_r($contador);*
        0 conta as palavras 
        1 cria um vetor em que posição está cada palavra 
        2 gera um vetor também só que mostrando em cada posição começa cada palavra
        */
        ?>
</body>
</html>

