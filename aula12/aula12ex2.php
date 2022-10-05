<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
            $valor = isset($_GET["valor"]) ? $_GET["valor"] : 1;
            echo "<h1>Calculando o Fatorial $valor</h1>";

            $contador = $valor;
            $fatorial = 1;

            do {
                $fatorial = $fatorial * $contador;
                $contador--;
            } while($contador >= 1);

            echo "<h2>$valor != $fatorial </h2>";
        ?>
        <a href="aula12ex2.html">Voltar</a>
    </div>
</body>
</html>