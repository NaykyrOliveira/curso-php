<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./_css/estilo.css"/>
    <title>Exercicío contador dinâmico - Aula 11</title>
</head>
<body>
    <div>
        <?php
           $inicio = isset($_GET["inicio"]) ? $_GET["inicio"] : 0; 
           $final = isset($_GET["final"]) ? $_GET["final"] : 0; 
           $incremento = isset($_GET["incremento"]) ? $_GET["incremento"] : 0; 

           if($inicio <= $final) {
                while($inicio <= $final) {
                    echo " $inicio <br> ";
                    $inicio+=$incremento;
                }
           } else {
                while($inicio >= $final) {
                    echo " $inicio <br> ";
                    $inicio-=$incremento;
                }
           }
        ?>
        <p><a href="aula11ex3.html">Voltar</a></p>
    </div>
</body>
</html>