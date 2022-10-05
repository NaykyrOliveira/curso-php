<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./_css/estilo.css"/>
    <title>Exercicío 3 - Aula 10</title>
    <style>
        .button {
            background-color: #Fefef5;
            border: 1px solid black;
            border-radius: 5px;
            padding: 3px;
        }
    </style>
</head>
<body>
    <div>
        <?php 
        $estados = isset($_GET["estado"]) ? $_GET["estado"] : 0;

        switch ($estados) {
             case 1:
             case 2:
             case 3:
             case 4:
             case 5:
             case 6:
             case 7:
                 echo "Você mora na Região Norte";
                 break;
             case 8:
             case 9:
             case 10:
             case 11:
             case 12:
             case 13:
             case 14:
             case 15:
             case 16:
                 echo "Você mora na Região Nordeste";
                 break;
             case 17:
             case 18:
             case 19:
             case 20:
                 echo "Você mora na Região Centro-Oeste";
                 break;
             case 21:
             case 22:
             case 23:
             case 24:
                 echo "Você mora na Regição Sudeste";
                 break;
             case 25:
             case 26:
             case 27:
                 echo "Você mora na Regição Sul";
                 break;   
            }  
        ?>
        <br> <br>
           
           
           
        <a class="button" href="aula10ex3.html">Voltar</a>
    </div>
</body>
</html>