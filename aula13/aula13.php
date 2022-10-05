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
            for($contador = 1; $contador <= 10; $contador++) {
                echo " $contador ";
            }

            echo "<br>";

            for($contador = 10; $contador >= 1; $contador--) {
                echo "$contador ";
            }

            echo "<br>";

            for($contador = 0; $contador <= 100; $contador+=5) {
                echo " $contador ";
            }
            echo "<br>";

            for($contador = 20; $contador >= 0; $contador-=2) {
                echo " $contador ";
            }
        ?>
    </div>
</body>
</html>