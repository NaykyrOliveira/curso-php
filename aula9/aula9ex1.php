<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./_css/estilo.css"/>
    <title>Exercicío Média do Aluno - Aula 9</title>
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
           $nota1 = $_GET["nota1"];
           $nota2 = $_GET["nota2"];
           $media = ($nota1 + $nota2) / 2;

           if($media > 0 && $media <= 5) {
                $statusAluno = "você está reprovado";
           } 
           elseif($media >= 5 && $media <= 7) {
                $statusAluno = "você está de recuperação";
           }
           else {
                $statusAluno = "você foi aprovado";
           }

           echo "A sua média foi $media ".$statusAluno;
        ?>
        <br> <br>
        <a class="button" href="aula9ex1.html">Voltar</a>
    </div>
</body>
</html>