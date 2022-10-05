<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./_css/estilo.css"/>
    <title>Diferença entre Igual e Idêntico em PHP</title>
</head>
<body>
    <div>
        <?php
            $ano = $_GET["ano"];
            $idade = 2022 - $ano;
            echo "Quem nasceu em $ano tem $idade anos <br>";
            $tipo = ($idade >= 18 and $idade < 64) ? "Voto Obrigatório " : "Voto Opcional";
            echo "O seu voto é $tipo";
        ?>
    </div>
</body>
</html>