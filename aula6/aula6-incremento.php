<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./_css/estilo.css"/>
    <title>Funções Aritméticas em PHP</title>
    <style>
        h2 {
            font: 15px Arial;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div>
        <?php
        /* Esse exercicío pretende demonstrar o uso 
        de operadores de incremento e decremento.*/ 
            $atual = $_GET["aa"]; // Essa linha vai pegar o ano da URL
            echo "O ano atual é $atual e o ano anterior é ".--$atual;
        ?>
    </div>
</body>
</html>
