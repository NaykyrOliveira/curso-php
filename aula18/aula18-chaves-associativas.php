<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 18 Vetores e Matrizes Parte I</title>
</head>
<body>
    <pre>
        <?php
            $v = array( "nome" => "Ana", 
                        "idade" => 23, 
                        "peso" => 78.5);
            $v["estuda"] = true;
            foreach($v as $k => $c) {
                echo "O campo $k possui o conteúdo $c <br>";
            }
        ?>
    </pre>
</body>
</html>

