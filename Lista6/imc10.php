<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            color: #333;
        }
        form {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input[type="text"] {
            width: 300px;
            padding: 5px;
            margin-top: 5px;
        }
        button {
            margin-top: 10px;
            padding: 5px 10px;
        }
        </style>
</head>
<body>
    <h1> Calculo de IMC</h1>
    <form method="get" action="imc10.2.php">
    <label for="nome"> Digite seu nome:</label>
    <input type="text" id="nome" name="nome" required>

    <label for="email"> Digite seu email:</label>
    <input type="text" id="email" name="email" required>


    <button type="submit"> Calcular</button>
</form>


</body>
</html>