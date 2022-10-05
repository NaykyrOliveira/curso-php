<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 13 Estrutura de repetição For</title>
</head>
<body>
    <div>
        <?php
            $numero = isset($_GET["numero"]) ? $_GET["numero"] : 1;

            for($contador = 1; $contador <= 10; $contador++) {
                $resultado = $numero * $contador;
                echo " $numero x $contador = $resultado <br> ";
            }
        ?>
        <br>
        <a href="aula13ex2.php">Voltar</a>
    </div>
</body>
</html>