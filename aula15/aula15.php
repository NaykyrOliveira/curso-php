<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 15 - Funções</title>
</head>
<body>
    <?php
        function teste(&$x) {
            $x += 2;
            echo "<p>O valor de x é $x</p> ";
        }

        $a = 3;
        teste($a);

        echo "<p>O valor de A é $a</p> ";
        ?>
</body>
</html>