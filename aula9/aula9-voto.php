<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./_css/estilo.css"/>
    <title>Exercicío 2 - Aula 9</title>
    <style>
        .button {
            background-color: #Fefef5;
            border: 1px solid black;
            border-radius: 5px;
            padding: 2px;
        }
    </style>
</head>
<body>
    <div>
        <?php   
           $ano = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
           $idade = date("Y") - $ano;

           echo "Você nasceu em $ano e tem $idade anos. <br>";

           if($idade < 16) {
                $tipoVoto = "você não pode votar";
            } 
           elseif(($idade >= 16 && $idade < 18) || ($idade > 65)) {
                $tipoVoto = "seu voto é opcional";
            } 
            else {
                    $tipoVoto = "seu voto é obrigatório";
            }
           
           echo "Com essa idade, $tipoVoto";
        ?>
        <br> <br>
        <a class="button" href="aula9-voto.html">Voltar</a>
    </div>
</body>
</html>