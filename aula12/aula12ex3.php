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
            $numero = isset($_GET["numero"]) ? $_GET["numero"] : 1;
            echo "<h1>A tabuada de $numero</h1>";

            $contador = 1;

            while($contador < 10) {
                $contador++;
                $resultado = $numero * $contador;

                echo "$numero x $contador = $resultado <br> ";
            } 
        ?>
        <br>
        <a href="aula12-tabuada.php">Voltar</a>
    </div>
</body>
</html>