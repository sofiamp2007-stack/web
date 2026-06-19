<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html>

<form method="get">
    <h1>Informe o valor</h1>
    <label for="num">Número</label>
    <input type ="text" id="num" name="num"></input>
    <input type="submit" value="Calcular">
</form>

<div class="container">
<?php 
       
    
       if(!isset($_GET["num"])){
            exit();
       }

       $num= $_GET["num"];
      

        for ($i=1; $i<=10; $i++){
                $result=$num*$i;
                echo "$num * $i = $result <br>";
        }
 
        
?>
</div>
