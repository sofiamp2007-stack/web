<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


</head>

<body>
    <h1>Dados recebidos</h1>
    <?php
        if(isset($_GET['nome']) && isset($_GET['email'])){
            $nome = $_GET['nome'];
            $email = $_GET['email'];
            echo "<p>Nome: $nome</p>";
            echo "<p>Email: $email</p>";
        } else {
            header("Location: imc10.php?error=faltando_error");
        }
        ?>
        <form method="POST" action="imc10.3.php">
            <label for="peso">Digite seu peso (kg):</label>
            <input type="text" id="peso" name="peso" required>

            <label for="altura">Digite sua altura (m):</label>
            <input type="text" id="altura" name="altura" required>

            <input type="hidden" name="nome" value="<?php echo htmlspecialchars($nome); ?>">
            <input type="hidden" name="email" value="<?php echo htmlspecialchars($email); ?>">
        '   '   '   '
            <button type="submit">Calcular IMC</button>
</body>
</html>