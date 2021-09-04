<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 22</title>
</head>
<body>
    <h2>Ler um valor N. Calcular e escrever seu respectivo fatorial. Fatorial
de N = N * (N-1) * (N-2) * (N-3) * ... * 1. Lembrando que, por definição, fatorial de
0 é 1.</h2>

    <form action="form22.php" method="post">
   <p>Numero: <input type="text" name="n"><br><br></p>
   
        <input type="submit">
    </form>    
    <br><br>

    <?php
     $N = $_POST['n'];
     $fat = 1;

     for($i = 1; $i <= $N; $i++){
        $fat = $fat * $i;
     }

     echo $fat;

?>

</body>
</html>