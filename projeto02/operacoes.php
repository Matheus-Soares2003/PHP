<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='style.css'>
    <title>Document</title>
</head>
<body>
    <div id="conteudo">
        <div id="titulo">Curso de PHP para iniciantes - por Gustavo Guanabara</div>
        <div id="php">
            <?php
                $num1 = $_GET["a"];
                $num2 = $_GET["b"];

                $soma = $num1 + $num2;
                $subtracao = $num1 - $num2;
                $mult = $num1 * $num2;
                $divisao = $num1 / $num2;
                $media = $soma / 2;

                echo "<h2>Valores Recebidos: $num1 e $num2</h2>";
                echo "<p>A soma entre é igual a $soma</p>";
                echo "<p>A subtração é igual a $subtracao</p>";
                echo "<p>A multiplicação é igual a $mult</p>";
                echo "<p>A divisão entre é igual a $divisao</p>";
                echo "<p>A média é igual a $media</p>";
            ?>
        </div>
    </div>
</body>
</html>
