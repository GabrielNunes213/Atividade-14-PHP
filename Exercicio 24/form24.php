<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 24</title>
</head>
<body>
    <h2>Fazer um programa para ler um número inteiro positivo N. O
programa deve então mostrar na tela N linhas, começando de 1 até N. Para cada
linha, mostrar o número da linha, depois o quadrado e o cubo do valor.</h2>

    <form action="form24.php" method="post">
   <p>Numero: <input type="text" name="n"><br><br></p>
   
        <input type="submit">
    </form>    
    <br><br>

    <?php
     $N = $_POST['n'];

     for($i = 1; $i <= $N; $i++){
        echo "$i ";
        echo $i * $i." ";
        echo $i * $i * $i;
        echo "<br>";
     }

?>

</body>
</html>