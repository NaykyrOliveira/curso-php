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
            $nota1 = $_GET["n1"];
            $nota2 = $_GET["n2"];
            $media = ($nota1 + $nota2) / 2;
            echo "A média do aluno foi $media <br>";
            echo "A situação do aluno é ".(($media < 6) ? "Reprovado" : "Aprovado");
           
        ?>
    </div>
</body>
</html>