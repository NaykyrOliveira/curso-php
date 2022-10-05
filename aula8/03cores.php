<!DOCTYPE html>
<html lang="pt-br">
<head>
        <?php
            $txt = isset($_GET["t"]) ? $_GET["t"] : "Texto Generico";
            $tam = isset($_GET["tam"]) ? $_GET["tam"] : "12pt";
            $cor = isset($_GET["cor"]) ? $_GET["cor"] : "#000000";
            
        ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./_css/estilo.css"/>
    <title>Exercicío 3 - Aula 8</title>
    <style>
        .button {
            background-color: grey;
            border: 1px solid black;
            border-radius: 5px;
            padding: 2px;
        }

        .texto {
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
</head>
<body>
    <div>
        <?php   
           echo "<span class='texto'>$txt</span>";
        ?>
        <br>
        <a class="button" href="aula8ex3.html">Voltar</a>
    </div>
</body>
</html>