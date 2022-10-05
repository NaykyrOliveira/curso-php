<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 14 - Funções exercício 2</title>
</head>
<body>
    <?php
        function soma($a, $b) {
           // $s = $a + $b;
            return $a + $b;
        }

        $x = 5;
        $y = 4;
        $resultado = soma($x, $y);

        echo "A soma entre $x e $y é igual a $resultado";
    ?>
</body>
</html>