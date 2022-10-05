<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./_css/estilo.css"/>
    <title>Exercicío 2 - Aula 8</title>
    <style>
        .button {
            background-color: grey;
            border: 1px solid black;
            border-radius: 5px;
            padding: 2px;
        }
    </style>
</head>
<body>
    <div>
        <?php
            $nome = isset ($_GET["nome"]) ? $_GET["nome"] : "[Não informado]";
            $nascimento = isset($_GET["nascimento"]) ? $_GET["ano"] : 0;
            $sexo = isset ($_GET["sexo"]) ? $_GET["sexo"] : "[Não informado]";
            $idade = date("Y") - $nascimento;
            echo " <br> $nome  é $sexo e tem $idade anos. ";
        ?>
        <br>
        <a class="button" href="aula8ex2.html">Voltar</a>
    </div>
</body>
</html>