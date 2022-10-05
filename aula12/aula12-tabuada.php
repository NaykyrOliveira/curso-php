<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicío 2 - Aula 12</title>
</head>
<body>
    <form method="get" action="aula12ex3.php">
        Número: <select name="numero" id="numero" value="1">
            <?php
                for($c = 1; $c <= 10; $c++) {
                    echo " <option> $c </option>";
                }
            ?>
        </select>
        <input type="submit" value="Tabuada">
    </form>
</body>
</html>