<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      
        .container{
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
            font-size:30pt;
        }
    </style>

</head>
<body>
    
</body>
</html>

<form method="get">
    <h1>Informe o valor</h1>
    <label for="num">Número</label>
    <input type ="text" id="num" name="num"></input>
    <input type="submit" value="Sumeter">

</form>

<div class="container">
<?php 
       
    
       if(!isset($_GET["num"])){
            exit();
       }
       $num= $_GET["num"];
       if ($num%2==0){
        echo "O numero $num é par";
       } else{
       echo "O número $num é impar";
       }

?>
</div>
