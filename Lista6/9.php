<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Palindromo</h1>
<form method="get" action="">
    <label for="texto"> Digite um texto:</label>
    <input type="text" id="texto" name="texto" required>
    <button type="submit"> Calcular</button>
</form>
<?php
    //vamos verificar se a variável $_GET['texto'] existe, se existir
   // vamos pegar o valor dela e armazenar na variavel $texto
    if(isset($_GET['texto'])){
        $texto = $_GET['texto'];
        //vamos calcular o tamanho da string
        $tamanho = strlen($texto);
        // vamos verificar se é palindormo
        $polindromo = ($texto == strrev($texto)) ? 'Sim' :'Não';
        //vammos contar o número de vogais
        $vogais = preg_match_all('/[aeiou]/i', $texto, $matches);
        //vamos contar o número de consoantes
        $consoantes = preg_match_all('/[bcdfghjklmnpqrstvwxyz]/i', $texto,$matches);
    
  ?>  
    <ul>
        <li> Tamanho da String: <?php echo $tamanho; ?></li>
        <li>Tamanho da String sem espaços: <?php echo strlen(str_replace(' ', '', $texto)); ?></li>
        <li> É um polindromo: <?php echo $polindromo; ?></li>
        <li> O número de vogais: <?php echo $vogais; ?></li>
        <li> O número de consoantes: <?php echo $consoantes; ?></li>

    </ul>
    <?php
    }
    ?>

</body>
</html>

