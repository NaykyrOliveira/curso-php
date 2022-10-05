<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 19 Vetores e Matrizes Parte II</title>
</head>
<body>
    <pre>
        <?php
            $v = array(2 => "A", 5 => "J", 0 => "M", 3 => "X", 4 => "K");
            print_r($v);
            // ksort($v); Coloca em ordem por chave
            krsort($v); // Coloca em ordem reversa por chave
            print_r($v);
        ?>
    </pre>
</body>
</html>