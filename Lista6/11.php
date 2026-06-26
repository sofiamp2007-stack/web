<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sessão</title>
</head>
<body>

<?php
session_start();

// Salva na sessão
if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
    $_SESSION['numero1'] = $_GET['numero1'];
    $_SESSION['numero2'] = $_GET['numero2'];
}

// Mostra o intervalo salvo
if (isset($_SESSION['numero1']) && isset($_SESSION['numero2'])) {
    echo "<p>Intervalo salvo na sessão: {$_SESSION['numero1']} a {$_SESSION['numero2']}</p>";
}
?>

<form method="get">
    <input type="number" name="numero1" placeholder="Primeiro número" required>
    <input type="number" name="numero2" placeholder="Segundo número" required>
    <input type="submit" value="Salvar">
</form>

</body>
</html>