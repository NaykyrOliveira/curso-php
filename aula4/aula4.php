<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Variáveis</title>
</head>
<body>
    <div>
        <?php
            $nome = "Naykyr";
            $idade = 27;
            echo "$nome tem $idade anos! <br> "; // Sem concatenação
            echo $nome." tem ".$idade." anos! "; // Com concatenação
        ?>
    </div>
</body>
</html>