<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./_css/estilo.css"/>
    <title>Exercicío formulário dinâmico - Aula 11</title>
</head>
<body>
    <div>
        <form method="get" action="aula11-form.php">
            <?php
            $c = 1;

            while($c <= 5) {
                echo "valor $c: <input type='number' name='valor$c' max='100' min='0' value='0'> <br>";
                $c++;
            }
            ?>
            <input type="submit" value="Enviar" class="button">
        </form>
    </div>
</body>
</html>