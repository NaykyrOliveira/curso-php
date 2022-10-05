<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title>Operadores Aritméticos</title>
</head>
<body>
    <div>
        <?php
            $numero1 = $_GET["a"];
            $numero2 = $_GET["b"];
            echo " <h2> Valores recebidos: $numero1 e $numero2 </h2>";
            $media = ($numero1 + $numero2) / 2;
            echo " A soma $numero1 + $numero2 é: ".($numero1 + $numero2);
            echo " <br> A subtração $numero1 - $numero2 é: ".($numero1 - $numero2);
            echo " <br> A multiplicação $numero1 * $numero2 é: ".($numero1 * $numero2);
            echo " <br> A divisão $numero1 / $numero2 é: ".($numero1 / $numero2);
            echo " <br> O módulo (resto da divisão) $numero1 % $numero2 é: ".($numero1 % $numero2);
            echo " <br> A média de ($numero1 + $numero2) / 2 é: ".($numero1 + $numero2) / 2;
        ?>
    </div>
</body>
</html>