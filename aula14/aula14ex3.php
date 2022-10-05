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
        function soma() {
            $p = func_get_args();
            $total = func_num_args();
            $s = 0;
            for($i = 0; $i < $total; $i++) {
                $s += $p[$i];
            }
            return $s;
        }

        $resultado = soma(3, 5, 2, 8, 9, 4);

        echo "A soma dos valores é $resultado";
    ?>
</body>
</html>