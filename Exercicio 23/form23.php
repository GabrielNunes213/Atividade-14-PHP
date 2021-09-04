<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 23</title>
</head>
<body>
    <h2>Ler um número inteiro N e calcular todos os seus divisores.</h2>

    <form action="form23.php" method="post">
   <p>Numero: <input type="text" name="n"><br><br></p>
   
        <input type="submit">
    </form>    
    <br><br>

    <?php
     $N = $_POST['n'];

     for($i = 1; $i <= $N; $i++){
        if($N % $i == 0){
            echo $i."<br>";
        }
     }

?>

</body>
</html>