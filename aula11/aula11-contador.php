<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./_css/estilo.css"/>
    <title>Exercicío contador de 0 a 10 - Aula 11</title>
</head>
<body>
    <div>
        <?php 
            $c= 1;

            while($c <= 10) {
                echo $c;
                $c++;
            }
        ?>
    </div>
</body>
</html>