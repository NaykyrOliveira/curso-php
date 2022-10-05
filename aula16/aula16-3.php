<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 16 - Função wordwrap</title>
</head>
<body>
    <?php
        $texto = " Aqui temos um texto gigante criado pelo PHP e vai mostrar o funcionamento da função wordwrap";
        $resultado = wordwrap($texto, 40, "<br>\n", false);

        echo $resultado;
        ?>
</body>
</html>

