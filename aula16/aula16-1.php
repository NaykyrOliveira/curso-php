<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 16 - Função prinf</title>
</head>
<body>
    <?php
        $produto = "Leite";
        $preco = 4.5;

        // echo " O $produto custa R$ " .number_format($preco, 2);
        printf (" O %s custa R$ %.2f ", $produto, $preco);
        ?>
</body>
</html>

