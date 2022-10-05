<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./_css/estilo.css"/>
    <title>Funções Aritméticas em PHP</title>
    <style>
        h2 {
            font: 15px Arial;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div>
        <?php
            $valor1 = $_GET["x"];
            $valor2 = $_GET["y"];
            echo "<h2> Valores recebidos: $valor1 e $valor2 </h2>";
            echo " O valor absoluto de $valor2 é ".abs($valor2);
            echo "<br> O valor de $valor1 <sup>$valor2</sup> é ".pow($valor1, $valor2);
            echo "<br> A raiz de $valor1 é ".sqrt($valor1);
            echo "<br> O valor de $valor2 arredondado é ".round($valor2); // ceil floor
            echo "<br> A parte inteira do $valor2 é ".intval($valor2);
            echo "<br> O valor de $valor1 em moeda é R$ ".number_format($valor1, 2, ",", ".");
        ?>
    </div>
</body>
</html>