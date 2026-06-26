<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<form action ="" method="get">
    <label for="num"> Numero </label>
    <input type="text" name="num" id="num">
    <input type ="submit" value="Calcular">
</form>

<?php

    if(!isset($_GET["num"])) {
        exit("Parâmetro num não enviado");
    }

    $num = $_GET["num"];
    function soma($numArray) {
        $soma = 0;
        for ($i =0; $i < count($numArray); $i++) {
            $soma += (int)$numArray[$i];

        }
        return $soma;
    }
    $valores =explode(",", $num);
    $resultado =soma($valores);
    echo $resultado;

    ?>