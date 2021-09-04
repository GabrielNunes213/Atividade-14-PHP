<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 18</title>
</head>
<body>
    <h2>Exercício 18 - Leia um valor inteiro X (1 <= X <= 1000). Em seguida mostre os
ímpares de 1 até X, um valor por linha, inclusive o X, se for o caso.</h2>

    <form action="form18.php" method="post">
   <p>X: <input type="number" name="x"><br><br></p>
        <input type="submit">
    </form>    
    <br><br>

    <?php
     $X = $_POST['x'];
     $i = 1;

     for($i = 1; $i <= $X; $i++){
        if($i % 2 > 0){
            echo "$i é impar<br>";
        }
     }
?>

</body>
</html>

