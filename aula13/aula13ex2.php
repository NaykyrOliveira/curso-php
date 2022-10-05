<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 13 Estrutura de repetição For</title>
</head>
<body>
    <form method="get" action="aula13-tabuada.php">
        <select name="numero" id="numero">
            <?php
                for($contador = 1; $contador <= 10; $contador++) {
                    echo " <option> $contador </option> ";
                }
            ?>
        </select>
        <input type="submit" value="Tabuada">
    </form>
</body>
</html>