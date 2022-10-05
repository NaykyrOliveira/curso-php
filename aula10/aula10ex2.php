<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./_css/estilo.css"/>
    <title>Exercicío 2 - Aula 10</title>
    <style>
        .button {
            background-color: #Fefef5;
            border: 1px solid black;
            border-radius: 5px;
            padding: 2px;
        }
    </style>
</head>
<body>
    <div>
        <?php   
           $dia = isset($_GET["diaSem"]) ? $_GET["diaSem"] : 0;

           switch ($dia) {
                case 2:
                case 3:
                case 4:
                case 5:
                case 6:
                    echo "Levanta e vai estudar!";
                    break;
                case 7:
                case 8:
                    echo "Descanse, pequeno gafanhoto! ;) ";
                    break;
                default:
                    echo "Dia da Semana inválido!";
           }
        ?>
        <br> <br>
        <a class="button" href="aula10ex2.html">Voltar</a>
    </div>
</body>
</html>