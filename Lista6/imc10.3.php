<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Recebendo dados POST</h1>
    <?php
    //verifique se as variavies nome, email, peso e altura, e calcula o IMC, se não existir redireciona para a pagina imc10.2.php 
    if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['peso']) && isset($_POST['altura'])) {
        
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];

        //calcula o IMC
        $imc = $peso / ($altura * $altura);

        echo "<p>Nome: $nome</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Peso: $peso kg</p>";
        echo "<p>Altura: $altura m</p>";
        echo "<p>IMC: " . number_format($imc, 2) ."</p>";

        if ($imc < 18.5) {
    echo "<h2>Abaixo do peso</h2>";
    echo "<img src='abaixopeso.png' width='300'>";
        }
            elseif ($imc < 25) {
                echo "<h2>Peso normal</h2>";
                echo "<img src='normal.png' width='300'>";
            }
            elseif ($imc < 30) {
                  echo "<h2>Sobrepeso</h2>";
                echo "<img src='sobrepeso.png' width='300'>";
            }
            elseif ($imc < 35) {
                 echo "<h2>Obesidade Grau I</h2>";
                echo "<img src='obesidade1.png' width='300'>";
            }
            elseif ($imc < 40) {
                echo "<h2>Obesidade Grau II</h2>";
                 echo "<img src='obesidade2.png' width='300'>";
            }
            else {
                echo "<h2>Obesidade Grau III</h2>";
                 echo "<img src='obesidade3.png' width='300'>";
            }
    } else {
        header("Location: imc10.2.php?error=faltando_error");
    }

    ?>
</body>
</html>