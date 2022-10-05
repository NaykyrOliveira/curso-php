<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./_css/estilo.css"/>
    <title>Exercicío 1 - Aula 8</title>
</head>
<body>
    <div>
        <?php
            $valor = $_GET["v"];
            $raiz = sqrt($valor);
            echo "A raiz quadrada de $valor <br> é igual a : ".number_format($raiz, 2);
        ?>
        <br>
        <a href="aula8.html">Voltar</a>
    </div>
</body>
</html>