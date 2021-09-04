<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 21</title>
</head>
<body>
    <h2>Fazer um programa para ler um número N. Depois leia N pares de
números e mostre a divisão do primeiro pelo segundo. Se o denominador for
igual a zero, mostrar a mensagem "divisao impossivel".</h2>

    <form action="form21.php" method="post">
   <p>N1: <input type="text" name="n1"><br><br></p>
   <p>N2: <input type="text" name="n2"><br><br></p>
   
        <input type="submit">
    </form>    
    <br><br>

    <?php
     $N1 = $_POST['n1'];
     $N2 = $_POST['n2'];
     $div = 0;

     if($N2 == 0){
        echo "Divisão impossível";
     }
     else
     {
        $div = $N1 / $N2;
        echo $div;
     }



?>

</body>
</html>