<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./_css/estilo.css"/>
    <title>Exercicío 1 Aula 10</title>
    <style>
        .button {
            background-color: #000000;
            color: #FFFFFF;
            border: 1px solid white;
            border-radius: 1px;
            padding: 3px;
        }
    </style>
</head>
<body>
    <div>
        <?php   
            $n = isset($_GET["numero"]) ? $_GET["numero"] : 0;
            $o = isset($_GET["oper"]) ? $_GET["oper"] : 1;

            switch($o) {
                case 1:
                    $r = $n * 2;
                    break;
                case 2: 
                    $r = $n ^ 3;
                    break;
                case 3:
                    $r = sqrt($n);
            }

            echo "O resultado da operação solicitada foi $r"
        ?>
        <br> <br>
        <a class="button" href="aula10ex1.html">Voltar</a>
    </div>
</body>
</html>